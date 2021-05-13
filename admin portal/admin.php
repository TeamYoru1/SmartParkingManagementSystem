<?php session_start();
require 'update_slots.php';
if (!$_SESSION['email']) {
  header("location: admin_login.php");
}
else {

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin Login Web Portal</title>
    
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>


    <style>
    a {
    display: block;
    padding: 8px 20px;
}

.left-links li a{
    color:#b3e5fc !important;
    font-weight:bold;
    font-family: tahoma;
    border-bottom:1px solid #b2ebf2;
}

.left-links li a:hover{
    color:#ff5252 !important;
}
    </style>
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">

            <!--logo start-->
            <a href="index.php" class="logo"><b>Smart-parking</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php" style="background-color:#ffd777;">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="#"><img src="assets/img/assistant-144.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"> <?php echo $_SESSION['email']; ?> </h5>
                     </ul>
                     <div class="list">


                  <ul class="left-links">
                      <li><a  href="blank.php"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Upload New Parkings</a></li>
                      <li><a  href="attendant.php"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Add new Parking Attendant</a></li>
                      <li><a  href="basic_table.php"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Parkings</a></li>
                        <li><a  href="basic_table2.php"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Attendants</a></li>
                          <li><a  href="admin_request.php"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Requests</a></li>
                  </ul>
                   </div>

              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

   


  </body>
</html>
<?php } ?>
