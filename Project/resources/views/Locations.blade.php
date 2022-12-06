<h1>locations</h1>

<a href="AddLocation">add</a>




@foreach ($locations as $location)
<a href="Pois/{{$location->id}}">
    <button>
        <p>{{$location->Naam}}</p>
        <p>{{$location->aantal_pois}}</p>
    </button>
</a>
@endforeach
