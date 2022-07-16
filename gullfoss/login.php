<?php

error_reporting(0);


include('db_con.php');
require_once 'session.php';

session_start();
$msg="";
$msg1="";

if($con===false)
{
    die("connection error");
}

    

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $email=$_POST["email"];
    $password=$_POST["password"];
   

    $sql="SELECT * from user WHERE email='".$email."' AND password='".$password."' ";

    $result=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($result);

        if($row["user_type"]=="admin")
        {   
            $_SESSION["email"]=$email;
            $_SESSION["user_type"]="admin";

            if($row["status"]=="0")
            {

            header("location:admin/admin.php");
            }
            else
            {
                $msg1 = "Not Aligable To Login";
            }
        }

        elseif($row["user_type"]=="customer")
        {

            $_SESSION["email"]=$email; 
            $_SESSION["user_type"]="customer";
            
            if($row["status"]=="0"){

            header("location:../checkout.php");
            }
            else
            {
                $msg1 = "Not Aligable To Login";
            }
        }

        else
        {
        // echo '<script type ="text/JavaScript">';  
        // echo 'alert("Wrong id password")';  
        // echo '</script>'; 
            $msg= "username or password is incorrect!";
        }
       
}    
?>