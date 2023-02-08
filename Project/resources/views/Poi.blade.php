<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../poi.css">
    <title>{{$poi_list->Naam}}</title>
</head>
<body>
    <div class="main-block">
      <nav>
      <div class="navbar">
        <div class="container nav-container">
            <input class="checkbox" type="checkbox" name="" id="" />
            <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
            </div>
            <div class="head-img">
            <img src="../facility_logo.png" width="150" height="50">
            </div>
          <div class="menu-items">
          <li><a href="#">Location</a></li>
            <li><a href="#">POI</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="../logout">LogOut</a></li>
          </div>
        </div>
      </div>
    </nav>
<<<<<<< HEAD
<div class="under-nav">
  <a href="../Pois/{{$poi_list->Locatie_ID}}"><i class="fa-solid fa-arrow-left fa-3x"></i></a>
  
  <a href="../MakeTest/{{$poi_list->id}}">Make Test</a>
  <h1>POI</h1>
    <a href="../ShowTest/{{$poi_list->id}}">Take Test</a>
    <a href="../AddElement/{{$poi_list->id}}"><i class="fa-solid fa-plus fa-3x"></i></a>

=======
    <br>
<div class="under-nav">
  <a href="../Pois/{{$poi_list->Locatie_ID}}"><i class="fa-solid fa-arrow-left fa-3x"></i></a>
  
  <a href="../MakeTest/{{$poi_list->id}}"><i class="fa-solid fa-book-medical fa-3x"></i></a>
  <h1>POI</h1>
    <a href="../Test/{{$poi_list->id}}"><i class="fa-solid fa-book fa-3x"></i></a>
    <a href="../AddElement/{{$poi_list->id}}"><i class="fa-solid fa-plus fa-3x"></i></a>
<br>
>>>>>>> 9453999948be31aebebfb356b3ee24c5ad310c7d
</div>
    <form action="../UpdatePoi" method="POST">
      @csrf
      <input type="hidden" name="poi_list_id" value="{{$poi_list->id}}">
      <input type="text" name="Naam" value="{{$poi_list->Naam}}" id="">
      <input type="text" name="Locatie_In_Gebouw" value="{{$poi_list->Locatie_In_Gebouw}}" id="">
      <div class="select-center">
      <select onchange="submit()" name="Status">
        <option value="{{$poi_list->Status}}" selected>{{$poi_list->Status}}</option>
        @if ($poi_list->Status == "Working")
            <option value="Broken">Broken</option>
        @else
            <option value="Working">Working</option>
        @endif
      </select>
</div>
      <input type="submit" value="" hidden="">
    </form>

    
  </div>
    @foreach($elements as $element)
    <a href="../Instruction/{{$element->id}}">
    <button>
        <div class ="p-button">
        <p>Name: {{$element->Naam}}</p>
        <p>Difficulty: {{$element->Moeilijkheidsgraad}}</p>
        <p>Type: {{$element->Status}}</p>
        <br>
      </button>
      </a>
    @endforeach
</body>
</html>
<script src="https://kit.fontawesome.com/89b8d7f2db.js" crossorigin="anonymous"></script>