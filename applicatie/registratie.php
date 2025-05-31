<?php
 require_once "header.php";
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
    createHeader();
    ?>
    <?php
     createSidebar();
    ?>
    <div class="containermain">

      <!-- <form action="loginfunctie.php" method="POST"> -->
        <div>
          <label><b>Gebruikersnaam:</b></label>
          <input name="naam" type="text" placeholder="Enter username" name="naam" required />
          </div>
          <div>
            <label><b>Wachtwoord:</b></label>
            <input name="wachtwoord"  type="password" placeholder="Enter password" name="wachtwoord"
              required />
          </div>
          <div>
            <label><b>Adres:</b></label>
            <input name="adres"  type="text" placeholder="Enter adress" name="adres"
              required />
          </div>
          <div>
            <button name="Registratie" value="registratie" type="submit">registratie</button>
          </div>
<!-- </form> -->
 </main>

  <?php
  createFooter();
  ?>
</body>

</html>