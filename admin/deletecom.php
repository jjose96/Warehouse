<?php
   include('session.php');;
   $idd=mysqli_real_escape_string($db,$_GET['id']);
   if(is_numeric($idd))
   {
   $fac_sql= mysqli_query($db, "DELETE FROM commodity WHERE itemid = $idd");
   $facexec = mysqli_fetch_assoc($fac_sql);
   header("location: ../admin/commodity.php");
   }
   else
   {
      header("Location:commodity.php");
   }

?>