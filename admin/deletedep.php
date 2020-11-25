<?php
   include('session.php');;
   $idd=mysqli_real_escape_string($db,$_GET['id']);
   if(is_numeric($idd))
   {
   $fac_sql= mysqli_query($db, "DELETE FROM department WHERE deptid = $idd");
   $facexec = mysqli_fetch_assoc($fac_sql);
   header("location: ../admin/department.php");
   }
   else
   {
      header("Location:department.php");
   }

?>