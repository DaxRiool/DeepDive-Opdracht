<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="poi.css">
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
  <a href="../Locations"><i class="fa-solid fa-arrow-left fa-3x"></i></a>
  <h1>ADD Location</h1>
  <a href=""><i class=""></i></a>
</div>
    <form action="../AddLocationStore" method="post">
        @csrf
  
      <div class="formcontainer">
      <div class="container">
        <p>Location</p>
        <input type="text" name="Naam" required="">
        <br><br>
        <!-- <input type="submit" value="send"> -->
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
