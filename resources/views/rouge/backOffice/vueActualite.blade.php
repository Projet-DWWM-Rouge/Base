@extends('layouts.backOffice')
@section('content')
@vite(['resources/css/styleVueActualite.css', 'resources/js/app.js'])
    <div class="ajouter">
        <a class="btn btn-primary" href="{{ route ('actu.admin.create') }}">Ajouter un nouveau FluxRss</a>
        <a class="btn btn-primary" href="{{ route ('admin')}}">Retour au DashBoard</a></div>
    <table>
    <thead>
    <tr>
        <td scope="col">ID</td>
        <th scope="col">Nom du FluxRss</th>
        <th scope="col">Url du FluxRss</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
    </tr>
    </thead>
    <tbody>
@foreach ($fluxRss as $fluxRss)
    <tr>
        <td>{{$fluxRss ['id']}}</td>
        <td>{{$fluxRss ['nom_flux']}}</td>
        <td>{{$fluxRss ['url_flux']}}</td>
        <td><a href="/actu/admin/edit/{{ $fluxRss ['id'] }} " class="btn btn-primary">Modifier</a></td>
        <td>
            <form action="{{ route('actu.admin.destroy',$fluxRss['id']) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger" onclick="return confirm('êtes-vous sur ?')">Supprimer</button>
            </form>
        </td>
    </tr>
@endforeach
    </tbody>
    </table>

@endsection