<?php
if (isset($_POST['username']) and (isset($_POST['wachtwoord']))) {
  if (($_POST['username'] == 'trainer') and ($_POST['wachtwoord'] == 'penalty')){
    session_start();
    $_SESSION['valid'] = true;
    $_SESSION['timeout'] = time();
    $_SESSION['login'] = true;
    header('refresh:0; URL=index.php');
  }

}

  echo "<html><head><title>LOG IN</title><h1>LOG IN</h1>";
  echo '<link rel="stylesheet" type="text/css" href="style.css"></head><body>';
  echo '<form action="login.php" method="post">';
  echo 'Username: <input type = "text" class = "textbox" size="30" name="username"required = "required"><br>';
  echo 'Wachtwoord: <input type = "text" class = "textbox" size = "30" name="wachtwoord" required ="required"><br>';
  echo '<input type="submit" value="login"></form>';

 ?>
