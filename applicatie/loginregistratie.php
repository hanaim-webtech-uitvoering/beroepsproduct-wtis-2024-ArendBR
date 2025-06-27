<?php
 require_once "functions/header.php";
 require_once "functions/sidebar.php";
 require_once "functions/createlogin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>login</title>
</head>
<body>
  <main>
    <?php
      createHeader();
      createSidebar();
    ?>
    <div class="containermain">
      <form action="functions/createlogin.php" method="POST"> 
        <div>
          <h1> Login </h1>
        </div>
        <div>
          <?php
           if(isset($_GET['msg'])) {
            $message = "Wachtwoord of gebruiksnaam onjuist";
            echo $message;
          }
          ?>
        </div>
        <div>
          <label><b>Gebruikersnaam:</b></label>
          <input name="username" type="text" placeholder="Enter Username" required />
         </div>
        <div>
          <label><b>Wachtwoord:</b></label>
          <input name="password"  type="password" placeholder="Enter Password" required />
        </div>
        <div>
          <button name="inloggen" value="inloggen" type="submit">Log in</button> <!-- </a> -->
        </div>
      </form>
        <div>
         <a href="registratie.php"> <button name="Registratie" value="registratie" type="submit">registratie</button> </a>
        </div>
 </main>
  <?php
    createFooter();
  ?>
</body>
</html>