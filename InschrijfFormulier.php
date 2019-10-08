<?php
session_start();
$link = mysqli_connect("localhost","trainer","penalty","voetbal");
if ($link) {
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
  echo "<html>";
  echo "<head><title>Inschrijven</title><h1>Inschrijven</h1>";
  echo '<link rel="stylesheet" type="text/css" href="style.css"></head><body>';
  echo '<form action="Inschrijving_Verwerk.php" method="post">';
  echo 'Naam: <input type = "text" class = "textbox" size="30" name="naam"required = "required" ><br>';
  echo 'Voornaam: <input type = "text" size = "30" class = "textbox" name="voornaam" required ="required" ><br>';
  echo 'Geboortedatum: <input type = "date" size = "30" class = "textbox" name="geboorte" required="required"><br>"';
  echo 'Ploeg: <select name="ploeg">';
  echo '<option value="">kies ploeg</option>';
  echo '<option value="u6">U6</option>';
  echo '<option value="u7">U7</option>';
  echo '<option value="u8">U8</option>';
  echo '<option value="u9">U9</option>';
  echo '<option value="u10">U10</option>';
  echo '<option value="u11">U11</option>';
  echo '<option value="u12">U12</option>';
  echo '<option value="u13">U13</option>';
  echo '<option value="u15">U15</option>';
  echo '<option value="u17">U17</option>';
  echo '</select> <b>'.$inschrijvingsgeld.'€</b>';
  echo '<br>Kledij: <select name= "kledij">';
  echo '<option value="">maak een keuze</option>';
  echo '<option value="geen">Geen nieuwe kledij nodig</option>';
  echo '<option value="wedstrijd">Alleen wedstrijd kledij '.$Wedstrijdkledij.'€ </option>';
  echo '<option value="training">Alleen trainingspak '.$trainingspakgeld.'€</option>';
  echo '<option value="beide">Wedstrijdkledij + trainingspak '.$beide.'€</option>';
  echo '</select>';

  echo '<br>Trainingsbal nodig ('.$balprijs.'€)?<input type="checkbox" name ="bal" value "off">';
  echo '<br>Ik accepteer de algemene voorwarden<input type="checkbox" name = "voorwaarden" >';
  echo '<br><input type="submit" value="verzenden">';
  echo "</form>";
  echo "</body></html>";

}
else {
  echo "Verbinding mislukt:";
  echo mysqli_connect_error();
}
echo "<br><a href= Index.php>Terug naar eerste pagina</a>";






























 ?>
