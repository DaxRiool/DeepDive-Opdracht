<h1>Alle Poi's</h1>

<a href="../Locations">locations</a>
<br><br>
<a href="../AddPoi/{{$Location_ID}}">Add</a>
@foreach ($pois as $poi)
<a href="../Poi/{{$poi->id}}">
    <button>
        <p>{{$poi->Naam}}</p>
        <p>{{$poi->Locatie_In_Gebouw}}</p>
        <p>{{$poi->Status}}</p>
    </button>
</a>
@endforeach