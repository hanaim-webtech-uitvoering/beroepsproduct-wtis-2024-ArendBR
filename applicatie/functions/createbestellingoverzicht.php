<?php
require_once "db_connectie.php";


function createbestellingoverzicht() {
    $db = maakverbinding();

    	$sql ="	SELECT o.order_id, u.username, u.address, o.datetime, o.status, o.personnel_username, p.name, p.price, p.type_id
		FROM Product AS p
		JOIN Pizza_Order_Product AS pop ON pop.product_name = p.name
		JOIN Pizza_Order AS o ON o.order_id = pop.order_id
		JOIN [User] AS u ON u.username = o.client_username
		ORDER BY o.status, o.datetime;";
    $query = $db->query($sql);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $result ) {

     echo "
    <tr>
    <td>" . $result["username"] . "</td>
    <td>" . $result["address"] . "</td>
    <td>" . $result["datetime"] . "</td>
    <td>" . $result["status"] . "</td>
    <td>" . $result["personnel_username"] . "</td>
    <td>" . $result["name"] . "</td>
    <td>" . $result["price"] . "</td>
    <td>" . $result["type_id"] . "</td>

    <td>
        <form method='POST'>
            <input type='hidden' name='order_id' value='" . $result['order_id'] . "'>
            <input type='hidden' name='status' value='" . $result['status'] . "'>
            <input type='submit' name='statusaanpassen' value='Status aanpassen'>
        </form>
    </td>

    <td>
        <form action='../detailoverzicht.php' method='POST'>
            <input type='hidden' name='product' value='" . $result['name'] . "'>
            <input type='submit' name='detailoverzicht' value='Detailoverzicht'>
        </form>
    </td>

    </tr>";
    } 
}
?>