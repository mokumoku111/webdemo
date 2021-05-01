<?php
session_start();
if (isset($_POST['Member_Username'])) {
    include "../connect.php";

    $Member_Username = $_POST['Member_Username'];
    $Member_Password = $_POST['Member_Password'];

    $stmt = $pdo->prepare("SELECT Member_Username, Member_Password, Member_Level FROM member WHERE Member_Username = ? AND Member_Password = ?");
    $stmt->bindParam(1, $_POST["Member_Username"]);
    $stmt->bindParam(2, $_POST["Member_Password"]);
    $stmt->execute();
    $row = $stmt->fetch();

    echo $_POST['Member_Username'];
    echo $_POST['Member_Username'];
    $_SESSION['fullname'] = $row['Member_Username'];
    $_SESSION['Member_Level'] = $row['Member_Level'];

    if ($_SESSION['Member_Level'] == 'ADMIN' AND !empty($row)) {
        $_SESSION["fullname"] = $row["Member_Username"];
        $_SESSION["Member_Username"] = $row["Member_Username"];
        header("Location:index_login_admin.php");
    
    }
    else if ($_SESSION['Member_Level'] == '' AND !empty($row)) {
        $_SESSION["fullname"] = $row["Member_Username"];
        $_SESSION["Member_Username"] = $row["Member_Username"];
        header("Location:profile.php");
    }else {
        header("Location:login.php");
    }

    // if (mysqli_num_rows($result) == 1) {

    //     $row = mysqli_fetch_array($result);

    //     $_SESSION['Member_ID'] = $row['Member_ID'];
    //     $_SESSION['Member_Fname'] = $row['Member_Fname'];
    //     $_SESSION['Member_Level'] = $row['Member_Level'];
    //     if ($_SESSION['Member_Level'] == 'ADMIN') {
    //         Header('Location: admin/index_admin.php');
    //     }
    //     if ($_SESSION['Member_Level'] == '') {
    //         Header('Location: index_login.php');
    //     }
    // } else {
    //     header("Location:login.php");
    // }
}
