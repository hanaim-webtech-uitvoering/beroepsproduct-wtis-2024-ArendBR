 <?php 
 require_once "functions/header.php";
 require_once "functions/sidebar.php";
 require_once "functions/afrekenenfunctie.php";
 require_once "functions/bestellingplaatsen.php";
 ?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Betaalpagina</title>
</head>
<?php
    createHeader();
    createSidebar();
    ?>
<body>
    <main>
    <div class="betaal-container">
        <?php 
            createafrekenform();
            if (isset($_POST["afrekenen"])) {
                bestellingplaatsen();
            }
        ?>
    </div>    
</main>
<?php
  createFooter();
?>
</body>
</html> 