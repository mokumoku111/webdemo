<!DOCTYPE html>
<html lang="en">
<?php include "../connect.php";
session_start();

if (empty($_SESSION["Member_Username"])) {
  header("location:login.php");
} ?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>ระบบจองสระว่ายน้ำชนเห็นชอบ</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>

      <?php include "editmenu.php"; ?>
      <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
          <!-- page start-->
          <div class="row mt">

            <div class="col-sm-12">
              <section class="panel">
                <header class="panel-heading wht-bg">
                  <h4 class="gen-case">

                    <?php
                    $stmt = $pdo->prepare("SELECT Member_Fname, Member_Lname FROM member WHERE Member_Username = '$USER' ");
                    $stmt->execute();
                    while ($row = $stmt->fetch()) {
                    ?>
                      <class="centered"> แก้ไขข้อมูลของสมาชิก <?= $row["Member_Fname"] ?> <?= $row["Member_Lname"] ?></class=>
                      <?php } ?>
                  </h4>
                </header>
                <div class="panel-body minimal">
                  <div class="table-inbox-wrap ">
                    <table class="table table-inbox table-hover">
                      <tbody>

                        <tr class="">
                          <td class="inbox-small-cells">

                          </td>
                          <td></td>
                          <td class="view-message"><b>Member ID</b></td>
                          <td class="view-message"><b>Member First Name</b></td>
                          <td class="view-message"><b>Member Last Name</b></td>
                          <td class="view-message"><b>Phone Number</b></td>
                          <td class="view-message"><b>ID Card</b></td>
                          <td class="view-message"><b>Age</b></td>
                          <td class="view-message"><b>Username</b></td>
                          <td class="view-message"><b>Password</b></td>
                          <td class="view-message"><b>Email</b></td>
                          <td class="view-message"><b></b></td>

                        </tr>

                        <?php
                        $stmt = $pdo->prepare("SELECT * FROM member ");
                        $stmt->execute(); ?>

                        <?php while ($row = $stmt->fetch()) { ?>
                          <form action="check_editprofile.php" method="post">
                            <tr>
                              <td></td>
                              <td></td>
                              <td><?= $row["Member_ID"] ?></td>
                              <td><?= $row["Member_Fname"] ?></td>
                              <td><?= $row["Member_Lname"] ?></td>
                              <td><?= $row["Member_PhoneNumber"] ?></td>
                              <td><?= $row["Member_IDCard"] ?></td>
                              <td><?= $row["Member_Age"] ?></td>
                              <td><?= $row["Member_Username"] ?></td>
                              <td><?= $row["Member_Password"] ?></td>
                              <td><?= $row["Member_Email"] ?></td>

                              <td><input type="submit" class="btn btn-success" value="Edit" /></td>
                              <td><input type="submit" class="btn btn-danger" value="Delete" /></td>
                              <!-- <td><a href='#' onclick='confirmEdit("<?= $row["Pid"] ?>")' class="btn btn-success"> Remove </a></td>
                              <td><a href='#' onclick='confirmDelete("<?= $row["Pid"] ?>")' class="btn btn-danger"> Remove </a></td> -->
                            </tr>
                          </form>

                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </section>
            </div>




        </section>
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
        <script src="lib/jquery.scrollTo.min.js"></script>
        <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
        <!--common script for all pages-->
        <script src="lib/common-scripts.js"></script>
        <!--script for this page-->
        <!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE - VIEW OUR DOCUMENTATION FOR FURTHER INFORMATION -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
        <script>
          $('.contact-map').click(function() {

            //google map in tab click initialize
            function initialize() {
              var myLatlng = new google.maps.LatLng(40.6700, -73.9400);
              var mapOptions = {
                zoom: 11,
                scrollwheel: false,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
              }
              var map = new google.maps.Map(document.getElementById('map'), mapOptions);
              var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Dashio Admin Theme!'
              });
            }
            google.maps.event.addDomListener(window, 'click', initialize);
          });
        </script>
</body>

</html>