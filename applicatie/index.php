<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sole Machina</title>
</head>
<body>
    <h1>Pizzeria Sole Machina</h1>
    <?php echo('Sole Machina'); ?>
    <br>
    <br>
    Alle technische informatie over je webserver vind je hier: <a href="phpinfo.php">http://<?=$_SERVER['HTTP_HOST']?>/phpinfo.php</a>
    <br>
    <br>
    Een voorbeeld van een pagina die gegevens uit de database haalt vind je hier: <a href="componist-aantalstukken.php">http://<?=$_SERVER['HTTP_HOST']?>/componist-aantalstukken.php</a>
</body>
</html> 
    -->
<?php

//  require_once "header.php";
 require_once "sidebar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Airport</title>
</head>

<?php
// createHeader();
?>

<body>
  <main>


    <?php
    createSidebar();
    ?>

    <div class="content-right">
      <div class="startpaginatext">
        <h1>Welkom bij Sole Machina</h1>
      </div>
    </div>
  </main>

  <footer></footer>
</body>

</html>