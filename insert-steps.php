<?php

session_start();
$host = 'localhost';
$db = 'shit';
$user = 'root';
$password = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $password);
?>

<a href="steppage.php">
    <input type="submit" value="back">
</a>
<form method="post">
    <h3>step amount</h3>
    <input name="stepamount"></input>
    <br>
    <br>
    <input type="submit" value="submit" name="submit">
</form>
<h1>add steps</h1>
<?php
$mashineid = 1;
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

