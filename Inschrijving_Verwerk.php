<?php
echo "<html><head></head>";
$link = mysqli_connect("localhost","jonathan","123456","voetbal");
if($link){
echo "Verbinding geslaagd voor 'voetbal'.<br><br>";
if (isset($_POST['naam']) and (isset($_POST['voornaam']))) {
  $Naam = $_POST['naam'];
  $Voornaam = $_POST["voornaam"];
  $Ploeg = $_POST["ploeg"];
  $Kledij = $_POST["kledij"];
  $Bal = $_POST['bal'];
  if (empty($Naam) or empty($Voornaam) or $Ploeg == "" or $Kledij = "") {
      echo " U heeft iets niet ingevuld of u bent niet akkoord met de algemene voorwaarden. Klik <a href=/Eindproject/InschrijfFormulier.php>HIER</a> om terug te gaan.";
      echo $Voornaam;
      echo $Naam;
      echo $Ploeg;
      echo $Kledij;
  }
  else{
    echo "<title>Inschrijving voor seizoen 2019 – 2020 geslaagd</title>";
    $query = "insert into 'inschrijving20192020'('voornaam', 'naam', 'ploeg', 'kledij', 'bal') values ('$Voornaam', '$Naam','$Ploeg','$Kledij',$Bal)";
    if(mysqli_query($link, $query)){
      echo "Record toegevoegd<br>";
      echo "$Naam,$Voornaam<br>";
      echo "$Ploeg<br>";
      echo "$Kledij<br>";
      echo "$Bal<br>";
    }
    else{
      echo "Fout bij het toevoegen: ".mysqli_error($link);
    }
}
}
else{
  echo "yikes";
}
}
else{
echo "Verbinding mislukt:";
echo mysqli_connect_error();
}


















echo "</html>";
?>
