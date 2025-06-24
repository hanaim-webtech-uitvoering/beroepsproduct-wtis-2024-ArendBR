<?php
 require_once "header.php";
 require_once "sidebar.php";
 require_once "functions/createbestellingoverzicht.php";
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
   <div class="outer-wrapper" >
      <div class="table-wrapper">
        <form>
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
?>
</table>
</form>
    </div>
</div>
   <!-- <td><button name="wijzigen" value="wijzigen" type="submit">Status wijzigen</button></td>
    <td> <a href="detailoverzicht.php"><button name="detailoverzicht" value="detailoverzicht" type="submit">Detailoverzicht</button> </a></td>
  </tr>
</table>
    </div> -->
 </main>

  <?php
  createFooter();
  ?>
</body>

</html>