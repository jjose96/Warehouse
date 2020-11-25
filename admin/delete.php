<?php
   include('session.php');;
   $idd=mysqli_real_escape_string($db,$_GET['id']);
   if(is_numeric($idd))
   {
   $s1="DELETE FROM `department` WHERE regid='$idd'";
   $s2="DELETE FROM `godown` WHERE regid='$idd'";
   $fac_sql= mysqli_query($db,$s1);
   $fac_sql= mysqli_query($db,$s2);
   header("location: ../admin/godown.php");
   }
   else
   {
      header("Location:dashboard.php");
   }

?>