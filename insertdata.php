<?php

    session_start();
    include "connect.php";
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
        header("location:index.php");

?>