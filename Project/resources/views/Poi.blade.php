<h1>{{$poi_list->Naam}}</h1>

    @foreach($elements as $element)
        <p>Name: {{$element->Naam}}</p>
        <p>Difficulty: {{$element->Moeilijkheidsgraad}}</p>
        <br><br>
    @endforeach
</body>
</html>
