<?php
echo "<html>";
echo "<head><title>Inschrijven</title><h1>Inschrijven</h1></head>";
echo "<body>";
echo '<form action="Inschrijving_Verwerk.php" method="post">';
echo 'Naam: <input type = "text" size="30" name="naam"required = "required"><br>';
echo 'Voornaam: <input type = "text" size = "30" name="voornaam" required ="required"><br>';
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
echo '</select> <b>230€</b>';
echo '<br>Kledij: <select name= "kledij">';
echo '<option value="">maak een keuze</option>';
echo '<option value="geen">Geen nieuwe kledij nodig</option>';
echo '<option value="wedstrijd">Alleen wedstrijd kledij 60€</option>';
echo '<option value="training">Alleen trainingspak 50€</option>';
echo '<option value="beide">Wedstrijdkledij + trainingspak 110€</option>';
echo '</select>';
echo '<br>Trainingsbal nodig (8€)?<input type="checkbox" name ="bal" value "off">';
echo '<br>Ik accepteer de algemene voorwarden<input type="checkbox" name = "voorwaarden" >';
echo '<input type="submit" value="verzenden">';
echo "</form>";





















echo "</body></html>";































 ?>
