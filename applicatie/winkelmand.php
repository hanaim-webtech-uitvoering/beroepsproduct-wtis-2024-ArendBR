<?php
 require_once "header.php";
 require_once "sidebar.php";
 require_once "functions/createwinkelmand.php";
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
    <div class="outer-wrapper" >
      <div class="table-wrapper">
      <table>
    <th>naam</th>
    <th>Adres</th>
    <th>product</th>
    <th>prijs</th>
    <th>type product </th>


<?php
createwinkelmand();
?>
</table>
    </div>
</div>
 </main>

  <?php
  createFooter();
  ?>
</body>

</html>