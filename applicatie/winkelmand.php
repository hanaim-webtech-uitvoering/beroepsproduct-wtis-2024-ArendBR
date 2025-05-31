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
  <title>detailoverzicht</title>
</head>

<body>
  <main>

    <?php
    createHeader();
    ?>
    <?php
     createSidebar();
    ?>
    <div class="detailoverzicht" >
      <table>
  <tr>
    <td>Klant</td>
    <td>Adres</td>
    <td>Bestelling</td>
  </tr>
  <tr>
    <td>Arend</td>
    <td>Langelaan 10</td>
    <td>Pizza Salami
        Kaas
        Tomaat
        Salami
        Zonder ui
    </td>
  </tr>
</table>
    </div>
 </main>

  <?php
  createFooter();
  ?>
</body>

</html>