<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../addlocation.css">
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
            <li><a href="#">Home</a></li>
            <li><a href="#">about</a></li>
            <li><a href="#">blogs</a></li>
            <li><a href="#">portfolio</a></li>
            <li><a href="#">contact</a></li>
          </div>
        </div>
      </div>
    </nav>
    
    <h1>{{$poi_list->Naam}}</h1>
    <h2>{{$poi_list->Locatie_In_Gebouw}}</h2>
    <h3>{{$poi_list->Status}}</h3>
    
    <a href="../Pois/{{$poi_list->Locatie_ID}}">All Pois</a>
    <br><br>
    <a href="../AddElement/{{$poi_list->id}}">Add</a>

    @foreach($elements as $element)
        <p>Name: {{$element->Naam}}</p>
        <p>Difficulty: {{$element->Moeilijkheidsgraad}}</p>
        <br><br>
    @endforeach
</body>
</html>
