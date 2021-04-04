<?php include "connect.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
    
    <h2>แบบฟอร์มสมัครสมาชิก</h2>
    <form action="insertdata.php" method="post">
        <div>
            <label for="">ชื่อ</label>
            <input type="text" name="Member_Fname" id="">
        </div>
        <div>
            <label for="">นามสกุล</label>
            <input type="text" name="Member_Lname" id="">
        </div>
        <div>
            <label for="">เบอร์โทรศัพท์</label>
            <input type="text" name="Member_PhoneNumber" id="">
        </div>
        <div>
            <label for="">หมายเลขบัตรประชาชน</label>
            <input type="text" name="Member_IDCard" id="">
        </div>
        <div>
            <label for="">อายุ</label>
            <input type="number" name="Member_Age" id="">
        </div>
        <div>
            <label for="">ชื่อผู้ใช้งาน</label>
            <input type="text" name="Member_Username" id="">
        </div>
        <div>
            <label for="">รหัสผ่าน</label>
            <input type="text" name="Member_Password" id="">
        </div>
        <div>
            <label for="">อีเมล์</label>
            <input type="text" name="Member_Email" id="">
        </div>
        <input type="submit" value="บันทึกข้อมูล">
    </form>
    <a href="index.php">กลับหน้าแรก</a>
</body>
</html>