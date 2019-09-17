<?php
   $con=mysqli_connect('localhost','root','','teamelite');//where $con is the connection variable name

   if(!mysqli_connect_errno())//added bracket here,ie, () and changed error to
   {
      echo "Failed to connect to MySQL: ".mysqli_connect_error();
   }

?>