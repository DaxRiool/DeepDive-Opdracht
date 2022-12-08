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
    ?>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand"><img src="facility logo.png" alt="Facilityapps"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="answer aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" class="fas fa-house fa-fw fa-xl" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tests.php">Tests</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a class="nav-link" href="questions.php">add new test</a>
      </li>
    </ul>
    </form>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="text-center">
<h1>Add Test question</h1>
</div>
<?php 
include_once "config.php"; 
$addME = "Submit";
if (!isset($_GET['question'])) {
    $question = null;
} else {
  $question = $_GET['question'];
}
if (!isset($_GET['answer1'])) {
    $answer1 = null;
} else {
    $answer1 = $_GET['answer1'];
}
if (!isset($_GET['answer2'])) {
    $answer2 = null;
} else {
    $answer2 = $_GET['answer2'];
}
if (!isset($_GET['answer3'])) {
    $answer3 = null;
} else {
    $answer3 = $_GET['answer3'];
}
if (!isset($_GET['answer4'])) {
  $answer4 = null;
} else {
  $answer4 = $_GET['answer4'];
}
if (!isset($_GET['correct'])) {
  $correct = null;
} else {
  $correct = $_GET['correct'];
}

$sql = "INSERT INTO test VALUES ('value','$question','$answer1','$answer2','$answer3','$answer4', $correct)";
if (isset($_GET['UserAdd']) == true && $_GET['UserAdd'] == $addME) {
    $movies = $connect->query($sql)
    ->fetchAll();
}
?>

<form class="wrapper" action='questions.php' method="GET">
    <label>Question</label>
    <input class="form-control" name="question" type="text" required><br>
    <label>Answer1 </label>
    <input class="form-control" name="answer1" type="text" required><br>
    <label>Answer2</label>
    <input class="form-control" name="answer2" type="text" required><br>
    <label>Answer3</label>
    <input class="form-control" name="answer3" type="text" required><br>
    <label>Answer4</label>
    <input class="form-control" name="answer4" type="text" required><br>
    <label>Correct Answer</label>
    <input class="form-control" name="correct" type="text" required><br>

    <input type="submit" name="UserAdd" class="btn btn-primary" value="<?php echo $addME ?>">
</form>
</body>
</html>