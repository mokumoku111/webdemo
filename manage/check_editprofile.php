<?php include "../../connect.php" ?>
<?php
$stmt = $pdo->prepare("UPDATE member SET Menber_ID=?,Member_Fname=?,Member_Lname=?,Member_PhoneNumber=?,Member_IDCard=?,Member_Age=?,Member_Username=?,Member_Password=?,Member_Email=?  WHERE idm=? ");

$stmt->bindParam(1, $_POST["Menber_ID"]);
$stmt->bindParam(2, $_POST["Member_Fname"]);
$stmt->bindParam(3, $_POST["Member_Lname"]);
$stmt->bindParam(4, $_POST["Member_PhoneNumber"]);
$stmt->bindParam(5, $_POST["Member_IDCard"]);
$stmt->bindParam(6, $_POST["Member_Age"]);
$stmt->bindParam(7, $_POST["Member_Username"]);
$stmt->bindParam(8, $_POST["Member_Password"]);
$stmt->bindParam(9, $_POST["Member_Email=?"]);
if ($stmt->execute()) 
    header("location: admin_edit_profile.php");

?>