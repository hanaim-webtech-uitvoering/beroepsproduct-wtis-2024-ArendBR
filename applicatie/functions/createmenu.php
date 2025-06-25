<?php

function createmenuoverzicht() {
    $db = maakverbinding();
    $sql = "SELECT name, type_id, price
            FROM Product
            ORDER BY type_id;"
    ;
    $query = $db->query($sql);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    if (!$results) {

        die('Invalid query' . $db->error);
    }
  if (isset($_SESSION['username'])) { 
    foreach ($results as $result ) {

    echo" 
<tr>  
<td>" . $result["name"] . "</td>
<td>" . $result["type_id"] . "</td>
<td>" . $result["price"] . "</td>
<td> <input type='submit' name='toevoegen' value=toevoegen> </td>
</tr> "; 
    }
  } else {
    echo" <h1> Inloggen voor bestelling </h1>";
  foreach ($results as $result ) {

    echo" 
<tr>  
<td>" . $result["name"] . "</td>
<td>" . $result["type_id"] . "</td>
<td>" . $result["price"] . "</td>
</tr> "; 
    }
  }
}
?>
