<?php

require_once('connection.php');
session_start();
$error = '';

        if(isset($_POST['submit']))
        {
            if(empty($_POST['Username']) || empty($_POST['Password'])) //CHECK IF THE FIELDS ARE EMPTY
            
            {
                header("location:Login.php?Empty= Please Fill in all Empty Blanks");

            }
            else
            {
                $query="select * from loginform where User='".$_POST['Username']."' and Pass'".$_POST['Password']."'";//Select info from database table
                $result=mysqli_query($con, $query);
                
                if(mysqli_fetch_assoc($result))//if the recalled varable after its use with the query, theinput text field and database will merge. If data is merged.
                {
                    $_SESSION['Username']=$_POST['Username'];
                    header("location:welcome.php");

                }

                else
                {
                    header("location:Login.php?Invalid=Please enter correct username and password ");//If database information and login credentials do not match, it will display an error message.
                }
            }
        }
        else
        {
            echo 'Not Working';
        }

?>