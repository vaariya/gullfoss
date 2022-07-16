<?php
require 'db_con.php';
   if (isset($_POST['submit'])) 
    {
       
        $email_1 = $row['email'];
        $product_1 = "SELECT * FROM `user` WHERE email = '".$email_1."' ";
        $p_row_1 = mysqli_query($con,$product_1);
        $p_email = mysqli_fetch_assoc($p_row_1);
        $customer_id = $p_email['id'];

        $select_cart = mysqli_query($con, "SELECT * FROM `cart`");
         $total = 0;
         $grand_total = "";
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){

        $name = $fetch_cart['name'];
        $grand_total = $total = $total_price;

    }}
        $product_2 = "SELECT * FROM `product` WHERE name = '".$name."' ";
        $p_result = mysqli_query($con, $product_2);
        $p_row_6 = mysqli_fetch_assoc($p_result);
        $product_id = $p_row_6['id'];

        $totalprice_1 =  $grand_total; 


        $produt_query = "inert into `order`(`customer_id`,`product_id`,`totalprice`) VALUES ('$customer_id','$product_id','$totalprice_1')";

        if ($produt_query) 
        {
        // echo '<script type ="text/JavaScript">';  
        // echo 'alert("Hello")';  
        // echo '</script>';
           // header('location:pdf.php'); 
            // mysqli_query($con, "DELETE FROM `cart`");

            echo $email_1;
            echo $name;
            echo $customer_id;
           echo $grand_total;

           // session_destroy();
           // header('location:index.php');
        }
        else
        {
            echo '<script type ="text/JavaScript">';  
        echo 'alert("Some thing went wrong")';  
        echo '</script>'; 
        }

    }
   ?>