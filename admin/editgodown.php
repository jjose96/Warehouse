<html lang="en"><head>
    <title>Dashboard</title>

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->

    <!-- Fontfaces CSS-->
    <link href="../../css/font-face.css" rel="stylesheet" media="all">
    <link href="../../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../css/theme.css" rel="stylesheet" media="all">

</head>
    <style>
    .hello{
        width: 300px;
    }
        </style>
   <?php include 'layout/header.php';
   include 'session.php';
   if(!empty($_GET['id'])){
    if(is_numeric($_GET['id']))
    {
     if (!empty($_POST))  {
        $regid = htmlentities(mysqli_real_escape_string($db, $_POST['regid']));
        $title = htmlentities(mysqli_real_escape_string($db, $_POST['title']));
        $address = htmlentities(mysqli_real_escape_string($db, $_POST['address']));
        $city = htmlentities(mysqli_real_escape_string($db, $_POST['city']));
        $state = "Kerala";
        $capacity = htmlentities(mysqli_real_escape_string($db, $_POST['capacity']));
        $form_sub="UPDATE `godown` SET `title`='$title',`address`='$address',`city`='$city',`state`='$state',`capacity`='$capacity' WHERE regid =".$_GET['id'];
         if ($db->query($form_sub) === TRUE) {
         echo "New record created successfully";
         echo "<script>document.location.href='godown.php';</script>";
         }
     }  
       
   }
} 
    ?>

<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<body class="animsition" style="animation-duration: 900ms; opacity: 1;">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="../images/icon/logo.png" alt="CoolAdmin">
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Admin</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Admin</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Godown</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="../images/icon/logo.png" alt="Cool Admin">
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1 ps">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="../admin/dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        <li>
                            <a href="../admin/godown">
                                <i class="fas fa-chart-bar"></i>Godowns</a>
                        </li>
                        <li>
                            <a href="../admin/department">
                                <i class="fas fa-table"></i>Department Head</a>
                        </li>
                        <li>
                            <a href="../admin/commodity">
                                <i class="far fa-check-square"></i>Commodity</a>
                        </li>
                       
                        
                        
                    </ul>
                </nav>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports...">
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        
                                        
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno">
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers">
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../images/icon/adm.png" alt="centralgov">
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">ADMIN</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../images/icon/adm.png" alt="central">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Controller</a>
                                                    </h5>
                                                    <span class="email">centralfci.gov.in</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="page-wrapper">
                    <div class="page-content--bge5">
                        <div class="container">
                            <div class="login-wrap">
                                <div class="login-content">
                                    <?php

                                    $mys="SELECT * FROM godown where regid=".$_GET['id'];
                                    $ex=mysqli_query($db,$mys);
                                    $sel= mysqli_fetch_array($ex);

                                    ?>
                                    <div class="login-form">
                                        <form action="" method="post" class="register-form" id="register-form">
                                               
                                                        <h2>Godown Update</h2><br>
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input class="au-input au-input--full" type="text" name="title" placeholder="title" value="<?php echo $sel['title']; ?>">
                                            </div>
                                           
                                                <div class="form-group">
                                                    <label for="address">Address :</label>
                                                    <textarea id="address" class="au-input au-input--full" rows="2" cols="25" placeholder="address" name="address"><?php echo $sel['address']; ?></textarea>
                                                    
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group">
                                                        <div class="form-select">
                                                        <div class="form-row">
                                                    <div class="form-group">
                                                        <div class="form-select">
                                                        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <script>
            var app = angular.module('myApp', []);
            app.controller('myCtrl', function($scope, $http) {
              $http.get("states.json")
              .then(function(response) {
                  $scope.hello = response.data;
              });
              $scope.GetValue = function() {
                            var selectin = $scope.myselect;
                             var manurl= "states/"+selectin
                             console.log(manurl);
                             $http.get(manurl)
                             .then(function(response){
                                 $scope.city= response.data;
                             })
              }
              $scope.GetDown=function(){                         
              var godownsel= $scope.cities;
              var wareurl= "warehouse/"+godownsel;
               console.log(wareurl);
              $http.get(wareurl)
               .then(function(response){
               $scope.ware= response.data;
      })
      }
            });
            
            </script>
            </br></br>
                Cities: <select ng-model="cities" name="city" ng-change="GetDown()">
                  <?php
                  $sql="SELECT * from statelist where state='Kerala'";
                  $exec=mysqli_query($db,$sql);
                  while($row=mysqli_fetch_array($exec)){
                      echo "<option value=".$row['city_name'].">".$row['city_name']."</option>";
                  }

                  ?>
                  </select><br><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                    <label>Total capacity</label>
                                                    <input class="au-input au-input--full" type="text" name="capacity" placeholder="capacity" value="<?php echo $sel['capacity']; ?>">
                                                </div>
                                            
                                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" style="width: 250px;">register</button>  
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>

    </div>
    
  <!-- Jquery JS-->
  <script src="../..//vendor/jquery-3.2.1.min.js"></script>
  <!-- Bootstrap JS-->
  <script src="../../vendor/bootstrap-4.1/popper.min.js"></script>
  <script src="../../vendor/bootstrap-4.1/bootstrap.min.js"></script>
  <!-- Vendor JS       -->
  <script src="../../vendor/slick/slick.min.js">
  </script>
  <script src="../../vendor/wow/wow.min.js"></script>
  <script src="../../vendor/animsition/animsition.min.js"></script>
  <script src="../../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
  </script>
  <script src="../../vendor/counter-up/jquery.waypoints.min.js"></script>
  <script src="../../vendor/counter-up/jquery.counterup.min.js">
  </script>
  <script src="../../vendor/circle-progress/circle-progress.min.js"></script>
  <script src="../../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../../vendor/chartjs/Chart.bundle.min.js"></script>
  <script src="../../vendor/select2/select2.min.js">
  </script>

  <!-- Main JS-->
  <script src="../js/main.js"></script>

</body>

</html>