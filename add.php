<?php
 include "dbConnet.php";

 
?>

<form action="" method="POST">
    <!-- <p>id</p>
    <input type="text" name="id" value=""> -->
    <p>name</p>
    <input type="text" name="name">
    <p>img</p>
    <input type="text" name="img">
    <p>price</p>
    <input type="text" name="price">

    <input type="submit" name="submitADD" value="ADD">
</form>

<?php

if (isset($_POST["submitADD"])){
    
    $name = $_POST["name"];
    $img = $_POST["img"];
    $price = $_POST["price"];

    
    if ($name == ""){ echo "add name";}
    elseif ($img == ""){ echo "add img";}
    elseif ($price == ""){ echo "add price";}
    else{
        $sql = "INSERT into product(name_, img, price)values('$name','$img',$price);"; 
        $qr = mysqli_query($conn,$sql);
        header("location: index.php");
    }
}
 
?>
