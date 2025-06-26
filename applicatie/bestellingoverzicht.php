<?php
 require_once "functions/header.php";
 require_once "functions/sidebar.php";
 require_once "functions/createbestellingoverzicht.php";
 require_once "functions/statusaanpassen.php";
 require_once "functions/createdetailoverzicht.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>bestellingoverzicht</title>
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
        <form action='' method='POST'>
      <table>
    <th>naam</th>
    <th>adres</th>
    <th>datetime</th>
    <th>status</th>
    <th>product</th>
    <th>prijs</th>
    <th>type product </th>
    <th>aanpassen status </th>
    <th>detailoverzicht </th>

<?php
createbestellingoverzicht();
if (isset($_POST["statusaanpassen"])) { statusaanpassen(); } 
if (isset($_POST["detailoverzicht"])) { createdetailoverzicht(); }  
?>
</table>
</form>
    </div>
</div>
 
 </main>

  <?php
  createFooter();
  ?>
</body>

</html>