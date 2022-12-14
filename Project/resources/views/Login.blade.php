<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="poi.css">
    <title>Login</title>
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
    <div class="formcontainer">
      <form action="LoginStore" method="post">
        @csrf
        <h1>Login</h1>
        <div class="container">
      <div class="icon">
        <i class="fas fa-user-circle"></i>
      </div>
    <p>Email</p>
    <input type="email" name="email" id="" required="">
    <br>
    <br>
    <p>Password</p>
    <input type="password" name="password" id="" required="">
    <br><br>
      </div>
      <button type="submit"><strong>LOGIN</strong></button>
    </form>
    <div><a href="/"><button class="account"><strong>DONT HAVE AN ACCOUNT ? REGISTER</strong></button></a></div>
    </div>
</body>
</html>
