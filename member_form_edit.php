<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
</head>
<body>
<?php 
include 'condb.php';
// ไอดีที่ส่งมาแก้ไข
$id = $_GET['id'];
// echo $id;
$query = "SELECT * FROM tbl_member WHERE id=$id";
$result = mysqli_query($condb, $query) or die("Error in sql : $query".mysqli_error($query));
$row = mysqli_fetch_array($result);

// print_r($row);


?>
<h1>ฟอร์มแก้ไขข้อมูลสมาชิก</h1>
    <form action="member_form_edit_db.php" method="post">
        iD: 
        <input type="number" name="id" value="<?php echo $row['id'] ?>" readonly> <br>
        username : 
        <input type="text" name="username" placeholder="Please enter Username" required value="<?php echo $row['username'] ?>"> <br>
        password :
        <input type="password" name="password" placeholder="Please enter Password" readonly value="<?php echo $row['password'] ?>"><br>
        name :
        <input type="text" name="name" placeholder="ชื่อ-นามสกุล" required value="<?php echo $row['name'] ?>"><br>
        Phone : 
        <input type="text" name="phone" placeholder="Numner Phone" required value="<?php echo $row['phone'] ?>"><br> 
        Email :
        <input type="email" name="email" placeholder="Email" required value="<?php echo $row['email'] ?>"><br>
        <button type="submit"> Edit Member </button>


    </form>

</body>
</html>