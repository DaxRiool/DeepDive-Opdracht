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
        <a href="../Poi/{{$poi_id}}"><i class="fa-solid fa-arrow-left fa-3x"></i></a>
      <h1>Test about Coffeemachine</h1>
      <a href=""><i class=""></i></a>
    </div>

    <form>
      <div class="formcontainer">
      <div class="container">
        <h2>1. How do you clean the machine ?</h2>
  <input type="radio" id="html" name="fav_language" value="HTML">
  <label for="html">Take every part out and clean it</label><br>
  <input type="radio" id="css" name="fav_language" value="CSS">
  <label for="css">Throw it in a dishwasher</label><br>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  <label for="javascript">It cleans itself</label>
  <br>
  <br>
  <br>

  <h2>2. How do you refill the machine ?</h2>
  <input type="radio" id="html" name="fav_language" value="HTML">
  <label for="html">Leave the old beans in</label><br>
  <input type="radio" id="css" name="fav_language" value="CSS">
  <label for="css">Take the new beans and put it in</label><br>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  <label for="javascript">Throw the beans away and leave it like that</label>
    <br>
    <br>
    <br>

  <h2>3. Where is the machine ?</h2>
  <input type="radio" id="html" name="fav_language" value="HTML">
  <label for="html">1st floor</label><br>
  <input type="radio" id="css" name="fav_language" value="CSS">
  <label for="css">2nd floor</label><br>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  <label for="javascript">3rd floor</label>
  <br>
  <br>

    </div>
        <button type="submit"><strong>FINISH</strong></button>
    </div>
    </form>
    <br>
    <br>
    </div>
</body>
</html>
<script src="https://kit.fontawesome.com/89b8d7f2db.js" crossorigin="anonymous"></script>
