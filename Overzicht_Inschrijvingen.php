<?php
session_start();
if ($_SESSION['login'] == false) {
  header('Refresh:0; URL=login.php');
}
else {
  echo "<html><head><title>Overzicht</title><h1>OVERZICHT</h1>";
  echo '<link rel="stylesheet" type="text/css" href="style.css"></head><body>';
  $link = mysqli_connect("localhost","trainer","penalty","voetbal");
  if ($link) {

    $query = "select count(ploeg) as NumberOfProducts from inschrijving20192020 where ploeg = 'u6' ";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_assoc($result);
    echo "Aantal spelers in ploeg u6:" .$row['NumberOfProducts']."<br>";
    $query = "select count(ploeg) as NumberOfProducts from inschrijving20192020 where ploeg = 'u7' ";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_assoc($result);
    echo "Aantal spelers in ploeg u7:" .$row['NumberOfProducts']."<br>";
    $query = "select count(ploeg) as NumberOfProducts from inschrijving20192020 where ploeg = 'u8' ";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_assoc($result);
    echo "Aantal spelers in ploeg u8:" .$row['NumberOfProducts']."<br>";
    $query = "select count(ploeg) as NumberOfProducts from inschrijving20192020 where ploeg = 'u9' ";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_assoc($result);
    echo "Aantal spelers in ploeg u9:" .$row['NumberOfProducts']."<br>";
    $query = "select count(ploeg) as NumberOfProducts from inschrijving20192020 where ploeg = 'u10' ";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_assoc($result);
    echo "Aantal spelers in ploeg u10:" .$row['NumberOfProducts']."<br>";
    $query = "select count(ploeg) as NumberOfProducts from inschrijving20192020 where ploeg = 'u11' ";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_assoc($result);
    echo "Aantal spelers in ploeg u11:" .$row['NumberOfProducts']."<br>";
    $query = "select count(ploeg) as NumberOfProducts from inschrijving20192020 where ploeg = 'u12' ";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_assoc($result);
    echo "Aantal spelers in ploeg u12:" .$row['NumberOfProducts']."<br>";
    $query = "select count(ploeg) as NumberOfProducts from inschrijving20192020 where ploeg = 'u13' ";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_assoc($result);
    echo "Aantal spelers in ploeg u13:" .$row['NumberOfProducts']."<br>";
    $query = "select count(ploeg) as NumberOfProducts from inschrijving20192020 where ploeg = 'u15' ";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_assoc($result);
    echo "Aantal spelers in ploeg u15:" .$row['NumberOfProducts']."<br>";
    $query = "select count(ploeg) as NumberOfProducts from inschrijving20192020 where ploeg = 'u17' ";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_assoc($result);
    echo "Aantal spelers in ploeg u17:" .$row['NumberOfProducts']."<br><br>";
    $query = "select count(trainingspak) as NumberOfProducts from inschrijving20192020 where trainingspak = '1' ";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_assoc($result);
    $trainingtotaal = $row['NumberOfProducts'];
    echo "Aantal bestelde trainingspakken:" .$row['NumberOfProducts']."<br>";
    $query = "select count(wedstrijdkledij) as NumberOfProducts from inschrijving20192020 where wedstrijdkledij = '1' ";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_assoc($result);
    $wedstrijdtotaal = $row['NumberOfProducts'];
    echo "Aantal bestelde wedstrijdkledij pakketten:" .$row['NumberOfProducts']."<br>";
    $query = "select count(bal) as NumberOfProducts from inschrijving20192020 where bal = '1' ";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_assoc($result);
    $baltotaal = $row['NumberOfProducts'];
    echo "Aantal bestelde ballen:".$row['NumberOfProducts']."<br>";
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
    $query = "select count(id) as NumberOfProducts from inschrijving20192020  ";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_assoc($result);
    echo "Hoeveelheid inschrijvingsgeld:".$row['NumberOfProducts'] * $inschrijvingsgeld;
    $totaleprijskledij = ($wedstrijdtotaal * $Wedstrijdkledij) + ($trainingtotaal*$trainingspakgeld) + ($baltotaal * $balprijs);
    echo "<br>Hoeveelheid kledij en bal geld:" .$totaleprijskledij;
  }
  else{
    echo "Verbinding mislukt:";
    echo mysqli_connect_error();
  }
  echo "<br><a href= Index.php>Terug naar eerste pagina</a>";
  echo "</body></html>";
}

 ?>
