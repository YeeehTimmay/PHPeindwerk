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
    echo 'Prijs inschrijving: <input type = "text" class = "textbox" size="30" name="inschrijving"><br>';
    echo 'Prijs trainingspak: <input type = "text" class = "textbox" size = "30" name="trainingspak" ><br>';
    echo 'Prijs Wedstrijdkledij: <input type = "text" class = "textbox" size="30" name="wedstrijdkledij"><br>';
    echo 'Prijs bal: <input type = "text" size = "30" class = "textbox" name="balprijs" ><br>';
    echo '<input type="submit" value="Aanpassen"></form> ';
  }
  if (isset($_POST['inschrijving']) and (isset($_POST['trainingspak'])) and (isset($_POST['wedstrijdkledij'])) and (isset($_POST['balprijs']))){
    $PrijsInschrijving = $_POST['inschrijving'];
    $PrijsTraining = $_POST['trainingspak'];
    $PrijsWedstrijd = $_POST['wedstrijdkledij'];
    $PrijsBal = $_POST['balprijs'];
    if ((empty($PrijsBal))) {
    }
    else {
      $query = "update `prijzen` set `item`='balprijs',`prijs`= $PrijsBal where `item`= 'balprijs'";
      if (mysqli_query($link,$query)) {
        echo "<br>Bal prijs veranderd naar $PrijsBal<br>";
      }
    }
      if (empty($PrijsInschrijving)){
    }
    else {
      $query = "update `prijzen` set `item`='inschrijvingsgeld',`prijs`= $PrijsInschrijving where `item`= 'inschrijvingsgeld' ";
      if (mysqli_query($link,$query)) {
        echo "Inschrijvingsprijs veranderd naar $PrijsInschrijving<br>";
    }

    }
    if (empty($PrijsTraining)) {
    }
    else {
      $query = "update `prijzen` set `item`='trainingspak',`prijs`= $PrijsTraining where `item`= 'trainingspak' ";
      if (mysqli_query($link,$query)) {
        echo "Trainingspak prijs veranderd naar $PrijsTraining<br>";
      }

    }
if (empty($PrijsWedstrijd)){
}
else {
  $query = "update `prijzen` set `item`='wedstrijdkledij',`prijs`= $PrijsWedstrijd where `item`= 'wedstrijdkledij' ";
  if (mysqli_query($link,$query)) {
    echo "Wedstrijdkledij prijs veranderd naar $PrijsWedstrijd<br>";
  }

}


}
}
echo "<br><a href= Index.php>Terug naar eerste pagina</a>";





 ?>
