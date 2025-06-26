<?php
function createbestellinglijst() {
    echo '<h1>' . $_SESSION['role'] . '</h1>';    
    echo'<h1>' . $_SESSION["username"]. '</h1>';
        
    $user = $_SESSION["username"]; 
    $db = maakverbinding();

    $sql = "SELECT u.username, u.address, o.datetime, o.status, p.name, p.price, p.type_id
    FROM Product AS p, Pizza_Order AS o, User1 AS u
    WHERE username = '$user'
	ORDER BY o.status, o.datetime;
    "
    ;
    $query = $db->query($sql);
    $query->execute([$user]); 
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $result ) {

        echo "
       <tr>
       <td>" . $result["username"] . " </td>
       <td>" . $result["address"] . " </td>
       <td>" . $result["datetime"] . " </td>
       <td>" . $result["status"] . " </td>
        <td>" . $result["name"] . " </td>
        <td>" . $result["price"] . "</td>
        <td>" . $result["type_id"] . "</td>
      </tr>
    ";
    } 
}
?>
