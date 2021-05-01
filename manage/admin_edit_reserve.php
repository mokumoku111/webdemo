<?php include "../connect.php" ?>
<?php
$stmt = $pdo->prepare("UPDATE `poolstatus` SET `PoolStatus_Status` = ? WHERE PoolStatus_ID = ? ; ");

$stmt->bindParam(1, $_POST["PoolStatus_Status"]);
$stmt->bindParam(2, $_POST["PoolStatus_OpenTime"]);
$stmt->bindParam(3, $_POST["PoolStatus_CloseTime"]);

if ($stmt->execute()) 
    header("location: index_login.php");

?>