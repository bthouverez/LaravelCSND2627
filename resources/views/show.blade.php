@extends('layout')


@section('title') 
    {{ $dragon->name }}
@endsection



@section('content')
    <ul>
        <img width="150" style="float: right"
            src="{{ $dragon->image_path }}"    
                 alt="Image de {{ $dragon->name }}"> 
        <li>{{ $dragon->id }}</li>
        <li>{{ $dragon->name }}</li>
        <li>{{ $dragon->height }}m</li>
        <li>{{ $dragon->type }}</li>
        <li>{{ $dragon->level }}</li>
        <li>{{ $dragon->born_at }}</li>
        <li>{{ $dragon->is_in_team ? 'Oui' : 'Non' }}</li>
    </ul>
@endsection