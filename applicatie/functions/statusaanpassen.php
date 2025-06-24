<?php
if (isset($_POST["detailoverzicht"])) {
 if (status = 1) {
  $sql = "UPDATE status
  SET status = 2  
  WHERE status = 1;";
 } else if {
   $sql2 = "UPDATE status
  SET status = 3  
  WHERE status = 2;";
 } else if {
   $sql2 = "UPDATE status
  SET status = 1  
  WHERE status = 3;";
 }
}
?>