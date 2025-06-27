<?php  
function toevoegenwinkelmand() {
$product = $_POST['product'];
$producttype = $_POST['producttype'];
$aantal = (int)$_POST['aantal'];
$prijs = (float)$_POST['prijs'];
$item = [
        'product' => $product,
        'producttype' => $producttype,
        'aantal' => $aantal,
        'prijs' => $prijs
    ];

    // Winkelmandje in sessie aanmaken als die nog niet bestaat
    if (!isset($_SESSION['winkelmand'])) {
        $_SESSION['winkelmand'] = [];
    }

    // Controleren of item al bestaat (op basis van productnaam)
    $gevonden = false;
    foreach ($_SESSION['winkelmand'] as $winkelmand => $bestaatitem) {
        if ($bestaatitem['product'] === $product) {
            // Voeg aantallen samen
            $_SESSION['winkelmand'][$winkelmand]['aantal'] += $aantal;
            $gevonden = true;
            break;
        }
    }

    if (!$gevonden) {
        $_SESSION['winkelmand'][] = $item;
    }   
}
?>