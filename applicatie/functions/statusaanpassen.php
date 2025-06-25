<?php
if (isset($_POST["status"])) {
   require_once "../db_connectie.php";
    $db = maakVerbinding(); 
$status = $_POST["status"];
 if ($status = 1) {
  $sql = "UPDATE status
  SET status = 2  
  WHERE status = 1;";
$query = $db->prepare($sql);
$query->execute();

 } elseif ($status = 2){
   $sql2 = "UPDATE status
  SET status = 3  
  WHERE status = 2;";
  $query = $db->prepare($sql);
  $query->execute();

 } elseif ($status = 3){
   $sql3 = "UPDATE status
  SET status = 1  
  WHERE status = 3;";
$query = $db->prepare($sql);
$query->execute();

 }

?>