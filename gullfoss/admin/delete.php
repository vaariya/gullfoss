<?php


require('../db_con.php');

$ids = $_GET['id'];

$msg1 = "";

// if(isset($_POST['delete']))
// {
     $sql = "DELETE FROM product WHERE id = '$ids' ";
     $data = mysqli_query($con,$sql);
     if($data) 
     {
      header('location:products.php');
      // $msg1 = "Deleted";
     }
     else
     {
          echo ' not Deleted';
     }     
// }


?>