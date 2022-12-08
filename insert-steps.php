<?php

session_start();
$host = 'localhost';
$db = 'shit';
$user = 'root';
$password = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $password);
$id = $_GET["id"];

?>
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
    <?php include_once "config.php";
    ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand"><img src="facility logo.png" alt="Facilityapps"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" class="fas fa-house fa-fw fa-xl" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tests.php">Tests</a>
        </li>
        <li>
          <a class="nav-link" href="steppage.php?id=<?php echo $id ?>">back</a>
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

</body>
</html>
<form method="post">
    <h3>step amount</h3>
    <input name="stepamount"></input>
    <br>
    <br>
    <input type="submit" value="submit" name="submit">
</form>
<h1>add steps</h1>
<?php
$mashineid = $id;
if (isset($_POST['submit'])) {
    $amount = $_REQUEST['stepamount'];
    setcookie("amount", $amount);
    ?>
    <form method="post">
    <?php
    for ($i = 1; $i <= $amount; $i++) {
        ?>
        <h3>step <?php echo $i; ?></h3>
        <textarea name="step<?php echo $i; ?>" ></textarea>
        <br>                
        <?php
    }
    ?>
    <br> 
    <input type="submit" value="submit" name="submit2">
    </form>
    <?php
}
if (isset($_POST['submit2'])) {
    for ($i = 1; $i <= $_COOKIE['amount']; $i++) {
        if (isset($_REQUEST["step$i"])) {
            $steps = $_REQUEST["step$i"];
        }
        $row =  "INSERT INTO `shittest1` (`steps`, `mashineid`, `stepid`) VALUES
        (:steps, :mashineid, :stepid)";
        $stmt = $pdo->prepare($row);
        $stmt->execute([
        ":steps" => $steps,
        ":mashineid" => $mashineid,
        ":stepid" => $i,
        ]);
        header("Refresh: 0;");
    }
}
