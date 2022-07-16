<?php
include('db_con.php');
session_start();



if (isset($_SESSION["email"])) {

    if ($_SESSION["user_type"] == "admin")
    {
    header("location:admin/admin.php");
    exit;
    }

    if ($_SESSION["user_type"] == "customer")
    {
    header("location:../checkout.php");
    exit;
    }

}
?>