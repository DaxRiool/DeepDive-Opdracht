<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addlocation.css">
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
            <li><a href="#">Home</a></li>
            <li><a href="#">about</a></li>
            <li><a href="#">blogs</a></li>
            <li><a href="#">portfolio</a></li>
            <li><a href="#">contact</a></li>
          </div>
        </div>
      </div>
    </nav>

    <form action="../AddLocationStore" method="post">
        @csrf
      <h1>ADD Location</h1>
      <div class="icon">
        <i class="fas fa-user-circle"></i>
      </div>
      <div class="formcontainer">
      <div class="container">
        <p>Location</p>
        <input type="text" name="naam">
        <br><br>
        <!-- <input type="submit" value="send"> -->
      </div>
      <button type="submit"><strong>ENTER</strong></button>
      </div>
    </form>
    </div>
</body>
</html>
