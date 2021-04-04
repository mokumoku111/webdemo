<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>ล็อคอินสำเร็จ</title>

</head>

<body>
  <?php
  include "../connect.php";
  session_start();


  $stmt = $pdo->prepare("SELECT Member_Username, Member_Password FROM member WHERE Member_Username = ? AND Member_Password = ?");
  $stmt->bindParam(1, $_POST["Member_Username"]);
  $stmt->bindParam(2, $_POST["Member_Password"]);
  $stmt->execute();
  $row = $stmt->fetch();

  echo $_POST['Member_Username'];
  echo $_POST['Member_Username'];
  $_SESSION['fullname'] = $row['Member_Username'];

  if (!empty($row)) {
    $_SESSION["fullname"] = $row["Member_Username"];
    $_SESSION["Member_Username"] = $row["Member_Username"];
    header("Location:profile.php");
  } else {
    header("Location:login.php");
  }

  ?>

</body>

</html>