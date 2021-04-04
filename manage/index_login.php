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
                    จองเวลาการใช้สระ

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
                          <td class="view-message dont-show"><a href="mail_view.php">Status</a></td>
                          <td class="view-message"><b>Open</b></td>
                          <td class="view-message"><b>close</b></td>
                          <td class="view-message"><b></b></td>

                        </tr>

                        <?php
                        $stmt = $pdo->prepare("SELECT * FROM poolstatus WHERE PoolStatus_Status = 'ว่าง' ");
                        $stmt->execute();
                        while ($row = $stmt->fetch()) {
                        ?>
                          <form action="reserve.php" method="post">

                            <input type="hidden" name="PoolStatus_ID" value="<?= $row["PoolStatus_ID"] ?>">

                            <tr class="unread">
                              <td class="inbox-small-cells">

                              </td>
                              <td class="inbox-small-cells"></td>
                              <td class="view-message  dont-show">

                                <?= $row["PoolStatus_Status"] ?>

                                <input type="hidden" name="PoolStatus_Status" value="จองแล้ว">

                              </td>
                              <td class="view-message "><?= $row["PoolStatus_OpenTime"] ?></td>
                              <td class="view-message "><?= $row["PoolStatus_CloseTime"] ?></td>
                              <td class="view-message "><input type="submit" class="btn btn-success" value="จองเวลา" /></td>
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
        <!-- /wrapper -->
      </section>

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