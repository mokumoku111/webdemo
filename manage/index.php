<!DOCTYPE html>
<html lang="en">
<?php include "../connect.php";
session_start();
?>

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
    <header class="header white-bg">

      <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
          <!-- page start-->

          <div class="col-sm-10">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                  ระบบจองสระว่ายน้ำชนเห็นชอบ
                  <form action="#" class="pull-right mail-src-position">
                    
                      <div class="top-menu">
                        <ul class="nav pull-right top-menu">
                          <li><a class="logout" href="login.php">Log in</a></li>
                         
                        </ul>
                      </div>
                  
                  </form>
                </h4>
              </header>

              <div class="panel-body minimal">
               
                


                <div class="table-inbox-wrap ">
                  <table class="table table-inbox table-hover">



                    <tbody>
                    <tr class="">
                        <td class="inbox-small-cells">
                          
                        </td>
                        <td ></td>
                        <td class="view-message"><b>สถานะ</b></td>
                        <td class="view-message"><b>เวลาเริ่ม</b></td>
                        <td class="view-message"><b>เวลาสิ้นสุด</b></td>
                        
                      </tr>

                      <?php
                      $stmt = $pdo->prepare("SELECT * FROM poolstatus");
                      $stmt->execute();
                      while ($row = $stmt->fetch()) {
                      ?>
                        <tr class="unread">
                          <td class="inbox-small-cells">
                          </td>
                          <td class="inbox-small-cells"></td>
                          <td class="view-message  dont-show"><?= $row["PoolStatus_Status"] ?></td>
                          <td class="view-message "><?= $row["PoolStatus_OpenTime"] ?></td>
                          <td class="view-message "><?= $row["PoolStatus_CloseTime"] ?></td>

                        </tr>
                      <?php } ?>

<!-- 

                      <tr class="">
                        <td class="inbox-small-cells">
                          <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show"><a href="mail_view.php">Facebook</a></td>
                        <td class="view-message"><a href="mail_view.php">New Friendship Request</a></td>
                        <td class="view-message inbox-small-cells"></td>
                        <td class="view-message text-right">March 13</td>
                      </tr>
                      <tr class="">
                        <td class="inbox-small-cells">
                          <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                        <td class="view-message dont-show"><a href="mail_view.php">Mark Webber <span class="label label-danger pull-right">urgent</span></a></td>
                        <td class="view-message"><a href="mail_view.php">The server is down</a></td>
                        <td class="view-message inbox-small-cells"></td>
                        <td class="view-message text-right">March 09</td>
                      </tr>
                      <tr class="">
                        <td class="inbox-small-cells">
                          <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                        <td class="view-message dont-show"><a href="mail_view.php">Facebook</a></td>
                        <td class="view-message"><a href="mail_view.php">New message from Patrick S.</a></td>
                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                        <td class="view-message text-right">March 08</td>
                      </tr>
                      <tr class="">
                        <td class="inbox-small-cells">
                          <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                        <td class="view-message dont-show">Paypal inc.</td>
                        <td class="view-message">New payment received</td>
                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                        <td class="view-message text-right">March 04</td>
                      </tr>
                      <tr class="">
                        <td class="inbox-small-cells">
                          <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show">Andrea <span class="label label-success pull-right">girlfriend</span></td>
                        <td class="view-message view-message">Weekend plans</td>
                        <td class="view-message inbox-small-cells"></td>
                        <td class="view-message text-right">March 04</td>
                      </tr>

                      <tr class="">
                        <td class="inbox-small-cells">
                          <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show">Evelyn <span class="label label-info pull-right">family</span></td>
                        <td class="view-message view-message">Surprise party</td>
                        <td class="view-message inbox-small-cells"></td>
                        <td class="view-message text-right">February 19</td>
                      </tr> -->
                    </tbody>
                  </table>
                </div>
              </div>
            </section>
          </div>

        </section>
        <!-- /wrapper -->
      </section>
      <!-- /MAIN CONTENT -->
      <!--main content end-->
      <!--footer start-->
      <!-- <footer class="site-footer">
        <div class="text-center">
          <p>
            &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
          </p>
          <div class="credits">
          
            Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
          </div>
          <a href="inbox.php#" class="go-top">
            <i class="fa fa-angle-up"></i>
          </a>
        </div>
      </footer> -->
      <!--footer end-->
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

</body>

</html>