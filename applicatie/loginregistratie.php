<?php
// require_once "applicatie/header.php";
 require_once "sidebar.php";
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
  //  createHeader();
    ?>
    <?php
     createSidebar();
    ?>
    <div class="containermain">

      <!-- <form action="loginfunctie.php" method="POST"> -->
        <div>
          <label><b>Gebruikersnaam:</b></label>
          <input required name="naam" type="text" placeholder="Enter Username" name="naam" required />
          </div>
          <div>
            <label><b>Wachtwoord:</b></label>
            <input required name="wachtwoord"  type="password" placeholder="Enter Password" name="wachtwoord"
              required />
          </div>
          <div>
           <a href="profiel.php"> <button name="inloggen" value="inloggen" type="submit">Log in</button> </a>
            <button name="Registratie" value="registratie" type="submit">registratie</button>
          </div>

 </main>

  <footer></footer>
</body>

</html>