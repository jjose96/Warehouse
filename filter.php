<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Godown</title>
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        
                        <div class="login-form">
                                   <p>

                                   </p>
                                            <h2>Details of Godowns  </h2>
                                 <?php 
                                      $sqlstate="SELECT distinct * from statelist"
                                 ?>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="state">State :</label>
                                            <div class="form-select">
                                                <form method="get">
                                                <select name="state" id="state" onchange="this.form.submit()">
                                                <?php
     if(isset($_GET['state']))
     {
     $state=mysqli_real_escape_string($db,$_GET['state']);
     $query="SELECT * FROM `cdetails`,`department`,`godown` where cdetails.deptid = department.deptid and godown.regid = department.regid and godown.state=$state";
     $ere= mysqli_query($db,$query);
     $fet= mysqli_fetch_array($ere);
     }
     else{
       $state="";
     }
     $dep_opt="SELECT distinct state FROM statelist";
     $gee=$db->query($dep_opt);
     echo "<option value='0'>ALL</option>";
     while($opt=mysqli_fetch_array($gee))
     {
       $ch=urlencode($opt['state']);
       $deptcode=$opt['state'];
       if($state==$ch)
       {
         $as="selected";
       }
       else{
         $as="";
       }
       echo "<option value=".$ch." ".$as.">".$opt['state']."</option>";
     }
    ?>
            </select>
                                </form> 
                                     <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="city">City :</label>
                                            <div class="form-select">
                                                <form method="post">
                                                <select name="city" id="city" onchange="this.form.submit()">
                                                    <?php if(isset($_GET['state'])){
                                                        $state=$_GET['state'];
                                                        $qaz="select * from statelist where state='$state'";
                                                        $ex=mysqli_query($db,$qaz);
                                                        
                                                        while($das=mysqli_fetch_array($ex)){
                                                            echo "<option value=".$das['city_name'].">".$das['city_name']."</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                </form>
                                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="city">Godown :</label>
                                            <div class="form-select">
                                                <select name="godown" id="city">
                                                <?php if(isset($_POST['city'])){
                                                        $city=$_POST['city'];
                                                        $qaz="select * from godown where state='$state' and city= '$city'";
                                                        $ex=mysqli_query($db,$qaz);
                                                        
                                                        while($das=mysqli_fetch_array($ex)){
                                                            echo "<option value=".$das['regid'].">".$das['title']."</option>";
                                                        }
                                                    }
                                                    ?>
                                                    
                                                </select>
                                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                                          
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="button">GO</button>  
                                                              
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="vendor/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <script src="js/main.js"></script>
</body>
</html>