<?php
 require_once "functions/header.php";
 require_once "functions/sidebar.php";
 require_once "db_connectie.php";
 require_once "functions/createdetailoverzicht.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>detailoverzicht</title>
</head>
<body>
  <main>
    <?php
    createHeader();
     createSidebar();
    ?>
    <div class="detailoverzicht" >
      <table>
        <tr>
          <th>Product</th>
          <th>Ingredient</th>
        </tr>
        <?php  
        createdetailoverzicht();
        ?>
      </table>
    </div>
 </main>
  <?php
  createFooter();
  ?>
</body>
</html>