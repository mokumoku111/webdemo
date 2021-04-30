<?php include "../connect.php";


$USER = $_SESSION["Member_Username"];

?>
<!--logo start-->
<a href="#" class="logo"><b><span>ระบบจองสระ</span></b></a>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
  <!--  notification start -->

  <!--  notification end -->
  <!-- </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li> -->

  </ul>
</div>
</header>
<!--header end-->
<!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->

    <ul class="sidebar-menu" id="nav-accordion">
      <p class="centered"><a href="profile.php"><img src="https://cambodiaict.net/wp-content/uploads/2019/12/computer-icons-user-profile-google-account-photos-icon-account.jpg" class="img-circle" width="80"></a></p>
      <?php
      $stmt = $pdo->prepare("SELECT Member_Fname, Member_Lname FROM member WHERE Member_Username = '$USER' ");
      $stmt->execute();
      while ($row = $stmt->fetch()) {
      ?>
        <h5 class="centered"><?= $row["Member_Fname"] ?> <?= $row["Member_Lname"] ?></h5>
      <?php } ?>
      <li class="mt">
        <a href="index_login.php">
          <i class="fa fa-thumb-tack"></i>
          <span>จองเวลา</span>
        </a>
      </li>
      <li class="sub-menu">
        <a href="profile.php">
          <i class="fa fa-cogs"></i>
          <span>แก้ไขการจอง</span>
        </a>
      </li>
      <li class="sub-menu">
        <a href="profile.php">
          <i class="fa fa-user"></i>
          <span>แก้ไขโปรไฟล์</span>
        </a>
      </li>
      <li class="sub-menu">
        <a href="logout.php">
          <i class="fa fa-sign-out"></i>
          <span>Logout</span>
        </a>
      </li>

      <!-- sidebar menu end-->
  </div>

</aside>