<?php 
session_start();
require_once('connection.php');

    if(isset($_POST['Login']))
    {

        if(empty($_POST['Username']) || empty($_POST['Password'])) 
        {
            header("location:login_seller.php?Empty= Please fill in the blanks");
        }
        else
        {
            $query="select * from seller where username_seller='".$_POST['Username']."' and password_seller='".$_POST['Password']."'";
            $result=mysqli_query($con, $query);
            
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['Username']=$_POST['Username'];
                header("location:periodic_reports.php");
            }
            else
            {
                header("location:login_seller.php?Invalid= Please enter correct username and password");
            }
        }
    }
?>