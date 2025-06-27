<?php
function updatewinkelmand() {
$winkelmand = $_POST['winkelmand'];
    $aantal = (int)$_POST['aantal'];

    if (isset($_SESSION['winkelmand'][$winkelmand])) {
        $_SESSION['winkelmand'][$winkelmand]['aantal'] = $aantal;
    }
}
?>