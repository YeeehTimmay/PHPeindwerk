<?php
session_start();
if ($_SESSION['login'] == false) {
  header('Refresh:0; URL=login.php');
}
else {
  echo "<html><head><title>PRIJZEN</title><h1>PRIJZEN</h1>";
  echo '<link rel="stylesheet" type="text/css" href="style.css"></head><body>';
  $link = mysqli_connect("localhost","trainer","penalty","voetbal");
  if ($link) {
    echo '<form action="Inschrijving_Prijzen.php" method="post">';
    echo 'Prijs inschrijving: <input type = "text" size="30" name="inschrijving"required = "required"><br>';
    echo 'Prijs trainingspak: <input type = "text" size = "30" name="trainingspak" required ="required"><br>';
    echo 'Prijs Wedstrijdkledij: <input type = "text" size="30" name="wedstrijdkledij"required = "required"><br>';
    echo 'Prijs bal: <input type = "text" size = "30" name="balprijs" required ="required"><br></form>';
    echo '<input type="submit" value="Aanpassen"> ';
  }
  if (isset($_POST['inschrijving']) and (isset($_POST['trainingspak'])) and (isset($_POST['wedstrijdkledij'])) and (isset($_POST['balprijs']))){
    $PrijsInschrijving = $_POST['inschrijving'];
    $PrijsTraining = $_POST['trainingspak'];
    $PrijsWedstrijd = $_POST['wedstrijdkledij'];
    $PrijsBal = $_POST['balprijs'];
    if ((empty($PrijsInschrijving)) or (empty($PrijsTraining)) or (empty($PrijsWedstrijd)) or (empty($PrijsBal))) {
    }
    $query = "update `prijzen` set `item`='balprijs',`prijs`= $PrijsBal where `item`= 'balprijs'";
    if (mysqli_query($link,$query)) {
      echo "Bal prijs veranderd naar $PrijsBal<br>";
  }
  $query = "update `prijzen` set `item`='inschrijvingsgeld',`prijs`= $PrijsInschrijving where `item`= 'inschrijvingsgeld' ";
  if (mysqli_query($link,$query)) {
    echo "Inschrijvingsprijs veranderd naar $PrijsInschrijving<br>";
}
$query = "update `prijzen` set `item`='trainingspak',`prijs`= $PrijsTraining where `item`= 'trainingspak' ";
if (mysqli_query($link,$query)) {
  echo "Trainingspak prijs veranderd naar $PrijsTraining<br>";
}
$query = "update `prijzen` set `item`='wedstrijdkledij',`prijs`= $PrijsWedstrijd where `item`= 'wedstrijdkledij' ";
if (mysqli_query($link,$query)) {
  echo "Wedstrijdkledij prijs veranderd naar$PrijsWedstrijd<br>";
}
}
}
echo "<br><a href= Index.php>Terug naar eerste pagina</a>";





 ?>
