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
      <h1>MAKE Test</h1>
      <a href=""><i class=""></i></a>
    </div>

    <form>
        @csrf
      <input type="hidden" name="poi_list_id" value="{{$poi_list_id}}">        
      <div class="formcontainer">
      <div class="container">
        <h3>Vraag 1</h3>
        <input type="text" name="Vraag1" required="">
        <p>Antwoord A</p>
        <input type="textarea" name="Antwoordr1v1" placeholder="Right answer here" required="" id="">
        <br>
        <p>Antwoord B</p>
        <input type="textarea" name="Antwoord2v1" required="" id="">
        <br>
        <p>Antwoord C</p>
        <input type="textarea" name="Antwoord3v1" required="" id="">
        <br>
        <p>Vraag 2</p>
        <input type="text" name="Vraag2" required="">
        <p>Antwoord A</p>
        <input type="textarea" name="Antwoord1v2r" placeholder="Right answer here" required="" id="">
        <br>
        <p>Antwoord B</p>
        <input type="textarea" name="Antwoord2v2" required="" id="">
        <br>
        <p>Antwoord C</p>
        <input type="textarea" name="Antwoord3v2" required="" id="">
        <br>
        <p>Vraag 3</p>
        <input type="text" name="Vraag3" required="">
        <p>Antwoord A</p>
        <input type="textarea" name="Antwoord1v3r" placeholder="Right answer here" required="" id="">
        <br>
        <p>Antwoord B</p>
        <input type="textarea" name="Antwoord2v3" required="" id="">
        <br>
        <p>Antwoord C</p>
        <input type="textarea" name="Antwoord3v3" required="" id="">
        <br>
      </div>
      <button type="submit"><strong>MAKE</strong></button>
      </div>
    </form>
    <br>
    <br>
    </div>
</body>
</html>
<script src="https://kit.fontawesome.com/89b8d7f2db.js" crossorigin="anonymous"></script>