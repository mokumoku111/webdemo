<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิกสำเร็จ</title>
</head>

<body>
    <?php include "../connect.php";
    session_start();

    $stmt = $pdo->prepare("INSERT INTO member VALUES ('',?,?,?,?,?,?,?,?)");
    $stmt->bindParam(1, $_POST["Member_Fname"]);
    $stmt->bindParam(2, $_POST["Member_Lname"]);
    $stmt->bindParam(3, $_POST["Member_PhoneNumber"]);
    $stmt->bindParam(4, $_POST["Member_IDCard"]);
    $stmt->bindParam(5, $_POST["Member_Age"]);
    $stmt->bindParam(6, $_POST["Member_Username"]);
    $stmt->bindParam(7, $_POST["Member_Password"]);
    $stmt->bindParam(8, $_POST["Member_Email"]);
    if ($stmt->execute())
        echo '<script type="text/javascript"> alert ("สมัครสมาชิกสำเร็จ") </script>';
    header("location: login.php");

    // {
    //     echo '<script type="text/javascript"> alert ("สมัครสมาชิกสำเร็จ") </script>';
    //     header("location:login.php");
    //     }
    // $row = $stmt->fetch();
    // if ($row = $stmt->fetch();){
    // echo '<script type="text/javascript"> alert ("สมัครสมาชิกสำเร็จ") </script>';
    // header("location:login.php");
    // }
    ?>

</body>

</html>