<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="poi.css">
    <title>Register</title>
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
            <li><a href="#">Home</a></li>
            <li><a href="#">about</a></li>
            <li><a href="#">blogs</a></li>
            <li><a href="#">portfolio</a></li>
            <li><a href="#">contact</a></li>
          </div>
        </div>
      </div>
    </nav>
    <h1>Register</h1>
    <div class="icon">
        <i class="fas fa-user-circle"></i>
    </div>
    <div class="formcontainer">
        <form action="RegisterStore" method="post">
            @csrf
            <div class="container">
                <p>Email</p>
                <input type="email" name="email" id="" required="">
                <br>
                <br>
                <p>Password</p>
    <input type="password" name="password" id="" required="">
    <br><br>
      </div>
      <button type="submit"><strong>REGISTER</strong></button>
    </form>
    <div ><a href="Login"><button class="account"><strong>ALREADY AN ACCOUNT ? LOGIN</strong></button></a></div>
</div>
</body>
</html>
