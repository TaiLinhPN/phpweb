<?php
 include "dbConnet.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


    <?php 
    //  $sql="SELECT * FROM student";
    //  $query = mysqli_query($conn,$sql);
    // while($row = mysqli_fetch_array($query)){
    //     echo $row['name_']."<br>";
    // }
    ?>

<table class="table">
  <thead>
    <tr>
      <th >stt</th>
      <th >name</th>
      <th >img</th>
      <th >price</th>
      <th ><a href="add.php">add</a></th>
      
    </tr>
  </thead>
  <tbody>
  <?php
        $sql = "SELECT * FROM product";
        $qr = mysqli_query($conn,$sql);
        $count = 1;
        while($rows = mysqli_fetch_array($qr)){
            echo "<tr>";
            echo    "<th >".$count++. "</th>";
            echo    "<th >" .$rows['name_']. "</th>";
            echo    "<th > <img src=".$rows['img']." class='card-img-top' style='width: 6rem;'></th>";
            echo    "<th >" .$rows['price']. "</th>";
            echo    "<th> <a href='update.php?id=".$rows['id']."'>update</a> | <a href='remove.php?id=".$rows['id']."'>remove</a></th>";
            echo "</tr>";

        }

    ?>
    
    

  </tbody>
</table>

    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>