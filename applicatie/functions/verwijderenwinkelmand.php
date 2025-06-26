<?php
function verwijderenwinkelmand() {
  unset($_POST['product'], $_POST['producttype'], $_POST['aantal'], $_POST['prijs']);  
}

?>