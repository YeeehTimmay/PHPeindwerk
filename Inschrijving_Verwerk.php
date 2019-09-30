<?php
session_start();
echo "<html><head></head>";
$link = mysqli_connect("localhost","trainer","penalty","voetbal");
if($link){
echo "Verbinding geslaagd voor 'voetbal'.<br><br>";
if (isset($_POST['naam']) and (isset($_POST['voornaam']))) {
  $Naam = $_POST['naam'];
  $Voornaam = $_POST["voornaam"];
  $Ploeg = $_POST['ploeg'];
  $Kledij = $_POST['kledij'];
  if ($Kledij == 'wedstrijd') {
    $Wedstrijd = 1;
    $Training = 0;
  }
  elseif ($Kledij == 'training') {
    $Training = 1;
    $Wedstrijd = 0;
  }
  elseif ($Kledij == 'beide') {
    $Training = 1;
    $Wedstrijd = 1;
  }
  else {
    $Wedstrijd = 0;
    $Training = 0;
  }
  if (isset($_POST['bal'])){
  $Bal = 1;
  }
    else {
        $Bal = 0;
  }

if (isset($_POST['voorwaarden'])) {
  $Voorwaarden = 1;
}
  else {
    $Voorwaarden = 0;
  }
  if (empty($Naam) or empty($Voornaam) or $Ploeg == "" or $Kledij == "" or $Voorwaarden == 0) {
      echo " U heeft iets niet ingevuld of u bent niet akkoord met de algemene voorwaarden. Klik <a href=/Eindproject/InschrijfFormulier.php>HIER</a> om terug te gaan.";
  }
  else{
    echo "<title>Inschrijving voor seizoen 2019 – 2020 geslaagd</title>";
    $query ="insert into `inschrijving20192020`(`voornaam`, `naam`, `ploeg`, `wedstrijdkledij`, `bal`, `trainingspak`) values ('$Voornaam','$Naam','$Ploeg','$Wedstrijd','$Bal','$Training')";

    if(mysqli_query($link, $query)){
      $query = "select  `item`, `prijs` from `prijzen` where `item` = 'inschrijvingsgeld'  ";
      $result = mysqli_query($link,$query);
      $row = mysqli_fetch_assoc($result);
      $inschrijvingsgeld = $row['prijs'];
      $query = "select  `item`, `prijs` from `prijzen` where `item` = 'wedstrijdkledij'";
      $result = mysqli_query($link,$query);
      $row = mysqli_fetch_assoc($result);
      $Wedstrijdkledij = $row['prijs'] ;
      $query = "select  `item`, `prijs` from `prijzen` where `item` = 'trainingspak'  ";
      $result = mysqli_query($link,$query);
      $row = mysqli_fetch_assoc($result);
      $trainingspakgeld = $row['prijs'];
      $query = "select  `item`, `prijs` from `prijzen` where `item` = 'balprijs'";
      $result = mysqli_query($link,$query);
      $row = mysqli_fetch_assoc($result);
      $balprijs = $row['prijs'];
      $beide = $trainingspakgeld+$Wedstrijdkledij;
      $totaal = $inschrijvingsgeld;
      if ($Training == 1 ) {
        $totaal = $totaal + $trainingspakgeld;
      }
      if ($Wedstrijd == 1) {
        $totaal = $totaal + $Wedstrijdkledij;
      }
      if ($Bal == 1) {
        $totaal =$totaal + $balprijs;
      }
      echo "Record toegevoegd<br>";
      echo "$Voornaam,$Naam<br>";
      echo "Ploeg: $Ploeg<br>";
      echo "Trainingspak: $Training<br>";
      echo "Wedstrijdkledij: $Wedstrijd<br>";
      echo "Bal: $Bal<br>";
      echo "Totaal: $totaal";
    }
    else{
      echo "Fout bij het toevoegen: ".mysqli_error($link);
    }
}
}
else{
  echo "yikes";
  echo $Voornaam;
  echo $Naam;
  echo $Ploeg;
  echo $Kledij;
  echo $Bal;
}
}
else{
echo "Verbinding mislukt:";
echo mysqli_connect_error();
}


















echo "</html>";
?>
