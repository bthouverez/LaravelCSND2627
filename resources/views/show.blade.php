<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Un dragon</title>
</head>
<body>
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

</body>
</html>