@extends('layouts.backOffice')
@section('content')
@vite(['resources/css/styleVueActualiteCrud.css', 'resources/js/app.js'])
<form class="needs-validation" action="{{ route('actu.admin.update',$fluxRss['id']) }}" method="POST">
    @csrf
    @method('put')
    <div class="form-row">

        <div class="form-group col-md-6">
            <label class="text-white" for="nom_flux">Nom de l'URL</label>
            <input type="text" value="{{ old('nom_flux', $fluxRss['nom_flux']) }}" class="form-control @error('nom_flux') is-invalid @enderror"
                id="nom_flux" name="nom_flux">
            @error('nom_flux')
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label class="text-white" for="url_flux">Adresse de l'URL</label>
            <input type="text" value="{{ old('url_flux', $fluxRss['url_flux']) }}" class="form-control @error('url_flux') is-invalid @enderror"
                id="url_flux" name="url_flux">
            @error('url_flux')
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>


    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
@endsection