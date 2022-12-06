<h1>add poi</h1>

<form action="../AddPoiStore" method="post">
    @csrf
    <input type="hidden" name="location_id" value="{{$Location_id}}">
    <p>Poi name</p>
    <input type="text" name="naam">
    <br><br>
    <p>Location in building</p>
    <input type="textarea" name="Locatie_In_Gebouw">
    <br><br>
    <p>status</p>
    <select name="status">
        <option value="Working">Working</option>
        <option value="Broken">Broken</option>
    </select>
    <br><br>
    <input type="submit" value="send">
</form>
