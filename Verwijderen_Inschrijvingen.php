<?php
session_start();
if ( $_SESSION['login'] == false) {
  header('Refresh:0; URL=login.php');
}
else {
  echo "<html><head><title>Verwijderen</title><h1>INSCHRIJVING ANNULEREN</h1>";
  echo '<link rel="stylesheet" type="text/css" href="style.css"></head><body>';
  echo "<form action=\"Verwijderen_Inschrijvingen.php\" method=\"Post\">";
  echo "Naam: <input type=\"text\" class = \"textbox\" size=\"30\" name=\"naam\" ><br>";
  echo "Voornaam: <input type = \"text\" class = \"textbox\"size = \"30\" name=\"voornaam\"><br>";
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
  echo '</select>';
  echo "<br><input type=\"submit\" value=\"Verwijderen\">";
  echo "</form>";
  if (isset($_POST['naam']) and (isset($_POST['voornaam'])) and (isset($_POST['ploeg']))){
    $Naam = $_POST['naam'];
    $Voornaam = $_POST['voornaam'];
    $Ploeg = $_POST['ploeg'];
    if ((empty($Naam)) or (empty($Voornaam)) or (empty($Ploeg))) {

  }

  $link = mysqli_connect("localhost","trainer","penalty","voetbal");
  if ($link) {
    echo "<br><br>";
    $query = "select count(*) as NumberOfProducts from inschrijving20192020 where naam= '$Naam' and voornaam = '$Voornaam' and ploeg = '$Ploeg'  ";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_assoc($result);
    if ($row['NumberOfProducts'] == 1) {
      $query = "delete from inschrijving20192020 where naam= '$Naam' and voornaam = '$Voornaam' and ploeg = '$Ploeg' ";
      if (mysqli_query($link,$query)) {
        echo "<font color= \"#FF0000\">Record verwijderd</font>";
      }
      else {
        echo "mislukt";
    }
  }
  else {
    echo "Foute gegevens ingevuld. Controleer ze grondig en probeer opnieuw.";
    echo mysqli_connect_error();
  }
  }
  }
  echo "<br><a href= Index.php>Terug naar eerste pagina</a>";
  echo "</body></html>";

}
 ?>
