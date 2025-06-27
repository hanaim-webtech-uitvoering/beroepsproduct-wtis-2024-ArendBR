<?php
function bestellingplaatsen() {
    require_once "db_connectie.php";
    $db = maakverbinding();

    if (!isset($_SESSION['username']) || !isset($_SESSION['winkelmand'])) {
        echo "Gebruiker of winkelmand niet gevonden.";
        return;
    }

    $user = $_SESSION['username'];
    $winkelmand = $_SESSION['winkelmand'];

    // Bepaal adres
    if (!empty($_POST['bezorgadres'])) {
        $adres = $_POST['bezorgadres'];
    } else {
        // Haal adres op uit database
        $sql3 = "SELECT address FROM [User] WHERE username = ?;";
        $query = $db->prepare($sql3);
        $query->execute([$user]);
        $adresresultaat = $query->fetch(PDO::FETCH_ASSOC);
        $adres = $adresresultaat ? $adresresultaat['address'] : '';
    }

    $datumtijd = date('Y-m-d H:i:s');
    $status = 1;
    $client = $user;
    $personeel = 'rdeboer';

        // Voeg bestelling toe aan Pizza_Order
        $sql = "INSERT INTO Pizza_Order (client_username, client_name, personnel_username, datetime, status, address)
                                     VALUES (?, ?, ?, ?, ?, ?);";
        $query = $db->prepare($sql);
        $query->execute([$user, $client, $personeel, $datumtijd, $status, $adres]);

        // Haal laatst ingevoegde order_id op
        $order_id = $db->lastInsertId();
        // Voeg alle producten toe aan Pizza_Order_Product
        $sql2 = "INSERT INTO Pizza_Order_Product (order_id, product_name, quantity)
                                       VALUES (?, ?, ?);";
        $query2 = $db->prepare($sql2);

        foreach ($winkelmand as $item) {
            $query2->execute([$order_id, $item['product'], $item['aantal']]);
        }
        // Winkelmand legen
        unset($_SESSION['winkelmand']);

        echo "<p>Bestelling succesvol geplaatst! Bedankt voor je aankoop.</p>";
    }
?>