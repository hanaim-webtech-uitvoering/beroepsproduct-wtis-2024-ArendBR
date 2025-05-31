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
    <div class="bestellingoverzicht" >
      <table>
  <tr>
    <td>Klant</td>
    <td>Bestelling</td>
    <td>Status</td>
    <td> </td>
    <td> </td>
  </tr>
  <tr>
    <td>Arend</td>
    <td>Pizza Margherita</td>
    <td>Status</td>
    <td><button name="wijzigen" value="wijzigen" type="submit">Status wijzigen</button></td>
    <td> <a href="detailoverzicht.php"><button name="detailoverzicht" value="detailoverzicht" type="submit">Detailoverzicht</button> </a></td>
  </tr>
</table>
    </div>
 </main>

  <?php
  createFooter();
  ?>
</body>

</html>