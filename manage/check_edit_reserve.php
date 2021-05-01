<!DOCTYPE html>
<html lang="en">
<?php include "../connect.php";
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
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="admin_edit_reserve.php" method="POST">
        <h2 class="form-login-heading">EDIT TIME RESERVE</h2>
        <div class="login-wrap">
          <input type="text" name="Member_Fname" class="form-control" placeholder="สถานะ ว่าง/ไม่ว่าง" autofocus>
          <br>
          <input type="text" name="Member_Lname" class="form-control" placeholder="เวลาเปิด">
          <br>
          <input type="number" name="Member_PhoneNumber" class="form-control" placeholder="เวลาปิด">
          <br>

          <button class="btn btn-theme btn-block" type="submit" name="admin_edit_reserve"> แก้ไข </button>
          <a class="btn btn-theme btn-block" href="index_login_admin.php">CANCEL</a>
          <!-- <button class="btn btn-theme btn-block" href="index.php" type="submit" name="cancel"> CANCEL </button> -->
          <!-- <a class="btn btn-theme btn-block" href="../register_member.php">REGISTER</a> -->
        </div>
      </form>


      <!-- Modal -->
      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Forgot Password ?</h4>
            </div>
            <div class="modal-body">
              <p>Enter your e-mail address below to reset your password.</p>
              <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
            </div>
            <div class="modal-footer">
              <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
              <button class="btn btn-theme" type="button">Submit</button>
            </div>
          </div>
        </div>
      </div>
      <!-- modal -->

    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>