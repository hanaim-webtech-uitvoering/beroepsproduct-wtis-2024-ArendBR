<?php
function statusaanpassen() {
   require_once "db_connectie.php";
    $db = maakVerbinding(); 
if (isset($_POST['order_id']) && isset($_POST['status'])) {

    $orderId = $_POST['order_id'];
    $huidigeStatus = (int)$_POST['status'];

    // Bepaal nieuwe status
    $nieuweStatus = $huidigeStatus === 3 ? 1 : $huidigeStatus + 1;

    // Update query
    $sql = "UPDATE Pizza_Order SET status = ? WHERE order_id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$nieuweStatus, $orderId]);

    // Terug naar overzicht
   // header("Location: ../bestellingoverzicht.php");
    exit;
} else {
    echo "Ongeldige invoer.";
}
}
?>