<?php include "../connect.php" ?>
<?php

$id = isset($_GET['Member_id']) ?  $_GET['Member_ID'] : '';


// $id = $_GET['Member_ID'];
$con = mysqli_connect('localhost','root','','db_reservepool');

if($id!=''){
$sql = "DELETE FROM member WHERE Member_ID = '".$id."' ";
}
// $result = mysqli_query($con,$sql);

//  $stmt = $pdo->prepare("DELETE FROM member WHERE Member_ID=?");

//  $stmt->bindParam(1, $_GET["Member_ID"]);

//  if ($stmt->execute())
//      header("location: admin_edit_profile.php");

?>