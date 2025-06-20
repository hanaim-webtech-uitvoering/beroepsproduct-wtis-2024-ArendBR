<?php
 require_once "header.php";
 require_once "sidebar.php";
 require_once "functions/createregistratie.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>registratie</title>
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

       <form action="functions/createregistratie.php" method="POST"> 
        <div>
          <h1> Login </h1>
        </div>
        <div>
          <label><b>Gebruikersnaam:</b></label>
          <input name="username" type="text" placeholder="Enter username" required />
          </div>
          <div>
            <label><b>Wachtwoord:</b></label>
            <input name="password"  type="password" placeholder="Enter password" required />
          </div>
          <div>
            <label><b>Adres:</b></label>
            <input name="address"  type="text" placeholder="Enter adress" required />
          </div>
          <div>
            <label><b>Voornaam:</b></label>
            <input name="first_name"  type="text" placeholder="Enter first name" required />
          </div>
          <div>
            <label><b>Achternaam:</b></label>
            <input name="last_name"  type="text" placeholder="Enter last name" required />
          </div>
          <div>
            <label><b>Rol:</b></label>
            <input name="role"  type="text" value="Client" readonly />
          </div>
          <div>
            <button name="registratie" value="registratie" type="submit">registratie</button>
          </div>
   </form> 
 </main>

  <?php
  createFooter();
  ?>
</body>

</html>