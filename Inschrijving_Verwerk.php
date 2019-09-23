<?php
echo "<html><head>";
if (isset($_POST['naam']) and (isset($_POST['voornaam']))) {
  $Naam = $_POST['naam'];
  $Voornaam = $_POST['voornaam'];
  $Ploeg = $_POST['ploeg'];
  $Kledij = $_POST['kledij'];
  $Bal = $_POST['bal'];
  $Voorwaarden = $_POST['voorwaarden'];
  if (empty($Naam) or empty($Voornaam) or $Voorwaarden == "False" or $Ploeg == "leeg" or $Kledij = "leeg") {
    echo " U heeft iets niet ingevuld of u bent niet akkoord met de algemene voorwaarden. Klik <a href=/Eindproject/InschrijfFormulier.php>HIER</a> om terug te gaan.";
  }
else{
  echo "<title>Inschrijving voor seizoen 2019 – 2020 geslaagd</title></head>";
  echo "$Naam,$Voornaam<br>";
  echo "$Ploeg<br>";
  echo "$Kledij<br>";
  echo "$Bal<br>";
}
















?>
