<?php
   include('session.php');
   $sss="SELECT * FROM DEPARTMENT where username='$user_check'";
   $exe=mysqli_query($db,$sss);
   $check=mysqli_fetch_array($exe);
   $deptid = $check['deptid'];
   $idd=mysqli_real_escape_string($db,$_GET['id']);
   $fac_sql= mysqli_query($db, "DELETE FROM cdetails WHERE coomodity = '$idd' and deptid='$deptid'");
   $facexec = mysqli_fetch_assoc($fac_sql);
   header("location: ../dept/dashboard");
?>