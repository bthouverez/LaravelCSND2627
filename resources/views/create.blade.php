@extends('layout')

@section('title') Ajouter un dragon @endsection

@section('content')
    <h1>Ajouter un dragon</h1>

    <form method="POST" action="/dragons">
        
        <input type="text" name="name" placeholder="name" value="{{ old('name') }}" />
        @error('name') <span class="error-message">{{ $message }}</span> @enderror
        <br>


        <input type="text" name="height" placeholder="height" value="{{ old('height') }}" />
        @error('height') <span class="error-message">{{ $message }}</span> @enderror<br>

        <select name="type" placeholder="type">
            <option value="">Choisir ...</option>
            <option value="strength">Force</option>
            <option value="speed">Vitesse</option>
            <option value="technical">Force</option>
        </select>
        @error('type') <span class="error-message">{{ $message }}</span> @enderror<br>
        <input type="number" name="level" placeholder="level" value="{{ old('level') }}" />
        @error('level') <span class="error-message">{{ $message }}</span> @enderror<br>

        <input type="date" name="born_at" placeholder="born_at" value="{{ old('born_at') }}" />
        @error('born_at') <span class="error-message">{{ $message }}</span> @enderror<br>

        <input type="text" name="image_path" placeholder="image_path" value="{{ old('image_path') }}" /><br>

        <input type="checkbox" name="is_in_team" placeholder="is_in_team" {{ old('is_in_team') ? 'checked' : '' }} /><br>
        <button>Créer</button>
    </form>
@endsection
