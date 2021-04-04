<?php include "../connect.php" ?>
<?php
$stmt = $pdo->prepare("UPDATE `poolstatus` SET `PoolStatus_Status` = ? WHERE PoolStatus_ID = ? ; ");

$stmt->bindParam(1, $_POST["PoolStatus_Status"]);
$stmt->bindParam(2, $_POST["PoolStatus_ID"]);

if ($stmt->execute()) 
    header("location: profile.php");

?>