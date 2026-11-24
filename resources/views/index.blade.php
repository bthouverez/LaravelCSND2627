@extends('layout-amber')

@section('title', 'Tous les dragons')


@section('content')
<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Taille</th>
        <th>Type</th>
        <th>Niveau</th>
        <th>Date naissance</th>
        <th>Equipe ?</th>
        <th>Image</th>
    </tr>

    @foreach($dragons as $dragon)
        <tr>
            <td>{{ $dragon->id }}</td>
            <td>{{ $dragon->name }}</td>
            <td>{{ $dragon->height }}m</td>
            <td>{{ $dragon->type }}</td>
            <td>{{ $dragon->level }}</td>
            <td>{{ $dragon->born_at }}</td>
            <td>{{ $dragon->is_in_team ? 'Oui' : 'Non' }}</td>
            <td><img width="150" 
                src="{{ $dragon->image_path }}"    
                     alt="Image de {{ $dragon->name }}"> </td>
        </tr>
    @endforeach
</table>
@endsection