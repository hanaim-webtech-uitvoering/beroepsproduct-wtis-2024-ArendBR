<?php
function verwijderenwinkelmand() {
  $winkelmand = $_POST['winkelmand'];

    if (isset($_SESSION['winkelmand'][$winkelmand])) {
        unset($_SESSION['winkelmand'][$winkelmand]);

    }  
}

?>