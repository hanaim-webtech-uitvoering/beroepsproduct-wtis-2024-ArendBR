<?php
require_once 'db_connectie.php';

// maak verbinding met de database (zie db_connection.php)
$db = maakVerbinding();

// haal alle componisten op en tel het aantal stukken
$query = 'select order_id as id, address as address, status as aantal
from Pizza_Order';

$data = $db->query($query);

$html_table = '<table>';
$html_table = $html_table . '<tr><th>Id</th><th>Address</th><th>Aantal stukken</th></tr>';

while($rij = $data->fetch()) {
  $id = $rij['id'];
  $naam = $rij['address'];
  $aantal = $rij['aantal'];
  
  $html_table = $html_table . "<tr><td>$id</td><td>$naam</td><td>$aantal</td></tr>";
}

$html_table = $html_table . "</table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    table,
    td,
    th {
      padding: 0px 2px 0px 5px;
      border: 1px solid black;
    }
    table { border-collapse: collapse; }
    td { text-align: left; }
    td:first-child { text-align: right; }
    td:last-child { text-align: center; }
  </style>
  <title>Componisten stukken</title>
</head>
<body>
  <h1>Componisten met aantal geschreven stukken</h1>
  <?php 
  echo ($html_table);
  ?>
</body>
</html>