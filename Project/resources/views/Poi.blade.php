<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="poi.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<h1>{{$poi_list->Naam}}</h1>

<a href="../Pois/{{$poi_list->Locatie_ID}}">Pois</a>
<br><br>
<a href="../PoiAdd/{{$poi_list->id}}">Add</a>
