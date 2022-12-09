<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../poi.css">
    <title>AddLocation</title>
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
    <div class="under-nav">
      <a href="../Poi/{{$poi_list_id}}"><i class="fa-solid fa-arrow-left fa-3x"></i></a>
      <h1>ADD Instruction</h1>
      <a href=""><i class=""></i></a>
    </div>

    <form action="../AddElementStore" method="post">
        @csrf
      <input type="hidden" name="poi_list_id" value="{{$poi_list_id}}">
      <div class="formcontainer">
      <div class="container">
        <p>Name</p>
        <input type="text" name="Naam" required="">
        <br><br>
        <p>Difficulty</p>
        <select name="Moeilijkheidsgraad">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <br><br>
        <p>Type</p>
        <select name="status">
            <option value="Maintenance">Maintenance</option>
            <option value="Broken">Broken</option>
        </select>
      </div>
      <button type="submit"><strong>ENTER</strong></button>
      </div>
    </form>
    <br>
    <br>
    </div>
</body>
</html>
<script src="https://kit.fontawesome.com/89b8d7f2db.js" crossorigin="anonymous"></script>