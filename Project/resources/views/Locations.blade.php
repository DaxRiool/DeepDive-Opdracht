<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="poi.css">
    <title>Location</title>
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
            <img src="facility_logo.png" width="150" height="50">
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
  <a href=""><i class=""></i></a>
    <h1>Locations</h1>
  <a href="AddLocation"><i class="fa-solid fa-plus fa-3x"></i></a>
</div>
    <br>
    <br>
    @foreach ($locations as $location)
    <a href="Pois/{{$location->id}}">
        <button>
            <p>Location : {{$location->Naam}}</p>
            <p>Number of POI'S : {{$location->aantal_pois}}</p>
        </button>
    </a>
    @endforeach
    <script src="https://kit.fontawesome.com/89b8d7f2db.js" crossorigin="anonymous"></script>
</body>
</html>
