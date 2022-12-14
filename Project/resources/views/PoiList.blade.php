<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../poi.css">
    <title>Document</title>
</head>

<body>

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
            <img src="../facility_logo.jpg" width="150" height="50">
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
<div class="under-nav">
  <a href="../Locations"><i class="fa-solid fa-arrow-left fa-3x"></i></a>
<h1>Alle Poi's</h1>
  <a href="../AddPoi/{{$Location_ID}}"><i class="fa-solid fa-plus fa-3x"></i></a>
</div>
<br>
<br>
@foreach ($pois as $poi)
<a href="../Poi/{{$poi->id}}">
    <button>
        <p>Name: {{$poi->Naam}}</p>
        <p>Location: {{$poi->Locatie_In_Gebouw}}</p>
        <p>Status: {{$poi->Status}}</p>
    </button>
</a>
@endforeach
</body>
</html>

<script src="https://kit.fontawesome.com/89b8d7f2db.js" crossorigin="anonymous"></script>