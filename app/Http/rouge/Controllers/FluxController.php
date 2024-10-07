<?php

namespace App\Http\rouge\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Http\rouge\Models\FluxRss;
use App\Http\rouge\Requests\FluxRssRequest;
use Exception;
use App\Http\Controllers\Controller;

class FluxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fluxRss = FluxRss::all()->toArray();
        return view('rouge.backOffice.vueActualite' , compact('fluxRss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rouge.backOffice.vueActualiteCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FluxRssRequest $request)
    {
        /*  $validatedData = $request->validate([
            'nom_flux' => 'required',
            'url_flux' => 'required',
        ]); */
        
        $validatedData = $request->validated();

        FluxRss::create($validatedData);
        return redirect()->route('actu.admin.index')->with('success','Actualité crée');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fluxRss = FluxRss::find($id)->toArray();
        return view('rouge.backOffice.vueActualiteEdit', compact('fluxRss'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FluxRssRequest $request, string $id)
    {
        /*  $validatedData = $request->validate([
            'nom_flux' => 'required',
            'url_flux' => 'required',
        ]); */

        $validatedData = $request->validated();
        $fluxRss = FluxRSs::find($id);

        $info = "";

        try{
            $fluxRss->update($validatedData);
            $info = "Vos modification ont été pris en compte";
        }
        catch(Exception $e){
            $info = "Erreur dans vos modification";
        }
        return redirect()->route('actu.admin.index')->with('success',$info);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fluxRss = FluxRss::find($id);
        $fluxRss->delete();
        return redirect()->route('actu.admin.index')->with('success','Actualité supprimé');
    }


    public function afficherFlux($nom_flux = "Sport")
    {

        $fluxRss = FluxRss::where("nom_flux",'=',$nom_flux)->first();
        $lesFlux = FluxRss::all()->toArray();
        $url = $fluxRss->url_flux;
        $flux = simplexml_load_file($url);


        return view('rouge.frontOffice.vueActualiteFront', compact('flux','lesFlux'));
    }

    public function apiFlux($nom_flux = "Sport")
    {
        $fluxRss = FluxRss::where("nom_flux",'=',$nom_flux)->first();
        $lesFlux = FluxRss::all()->toArray();
        $url = $fluxRss -> url_flux;
        $flux = simplexml_load_file($url);
        $api =  json_encode($flux);

        return view('rouge.fronOffice.vueActualiteApi', compact('api'));
    }
}
