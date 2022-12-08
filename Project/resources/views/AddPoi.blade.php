<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="../poi.css">
    <title>Facility</title>
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
            <li><a href="#">Home</a></li>
            <li><a href="#">about</a></li>
            <li><a href="#">blogs</a></li>
            <li><a href="#">portfolio</a></li>
            <li><a href="#">contact</a></li>
          </div>
        </div>
      </div>
    </nav>
    <form action="../AddPoiStore" method="post">
        @csrf   
      <h1>ADD POI</h1>
      <div class="icon">
        <i class="fas fa-user-circle"></i>
      </div>
      <div class="formcontainer">
      <div class="container">
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
        <!-- <input type="submit" value="send"> -->
      </div>
      <button type="submit"><strong>ENTER</strong></button>
      </div>
    </form>
</body>
</html>


<!-- <form action="../AddPoiStore" >
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
</form> -->