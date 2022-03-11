<?php
 include "dbConnet.php";

 if(isset($_GET['id'])){
    $id = $_GET['id'];}

$sql = "DELETE FROM product WHERE id = $id";
$qr = mysqli_query($conn,$sql);
header("location: index.php");

    
?>