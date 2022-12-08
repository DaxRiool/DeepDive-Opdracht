<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Facilityapps</title>
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="shortcut icon" href="facility favicon.png" type="image/x-icon">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<?php include_once "config.php";
$query = $connect->query("SELECT * FROM test")
    ?>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand"><img src="facility logo.png" alt="Facilityapps"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="answer" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" class="fas fa-house fa-fw fa-xl" href="index.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="tests.php">Tests</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      <a class="nav-link" href="questions.php">add new test</a>
      </li>
    </ul>
    </form>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php
            while ($data = $query->fetch()) {
                $id = $data["id"];
                $question = $data["question"];
                $answer1 = $data["answer1"];
                $answer2 = $data["answer2"];
                $answer3 = $data["answer3"];
                $answer4 = $data["answer4"];
                $correct = $data["correct"];
        ?>
      <div class="card fs-2 fw-bold">
            <div> <br><h2><?php echo $question; ?></h2> <br>
            <form>
  <input type="radio" id="answer" name="fav_language">
  <label for="answer"><h2><?php echo $answer1; ?></h2></label><br>
  <input type="radio" id="answer" name="fav_language">
  <label for="answer"><h2> <?php echo $answer2; ?></h2></label><br>
  <input type="radio" id="answer" name="fav_language">
  <label for="answer"><h2> <?php echo $answer3; ?></h2></label><br>
  <input type="radio" id="answer" name="fav_language">
  <label for="answer"><h2> <?php echo $answer4; ?></h2></label><br>
</form>
        <?php
        }
        ?>
    <button type="submit" class="btn btn-primary">Submit</button>
</body>
</html>