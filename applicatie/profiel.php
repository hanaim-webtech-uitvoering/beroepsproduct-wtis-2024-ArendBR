<?php
 require_once "functions/header.php";
 require_once "functions/sidebar.php";
 require_once "functions/createbestellinglijst.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Profiel</title>
</head>

<body>
  <main>

    <?php
    createHeader();
    createSidebar();
    ?>
<table>
<th>Username</th>
<th>Adres</th>
<th>datum</th>
<th>Status</th>
<th>Product</th>
<th>Prijs</th>
<th>Producttype</th>

    <?php
     createbestellinglijst();
    ?>
</table>
  

  </main>

  <?php 
  createFooter();
  ?>
</body>

</html>