<?php
include '../config.php';
if(!empty($_POST['datas'])){
    $readit= $_POST['datas'];
    echo $readit;
    $sql="INSERT INTO `rfidtest`(`rfid`) VALUES ('$readit')";
    $ss= mysqli_query($db,$sql);
}

?>