<?php 
include 'condb.php';

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// echo '<hr>';

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

// exit;

// ประกาศตัวแปรรับค่าจากฟอร์ม

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $id = $_POST['id'];

// Update data

    $sql = "UPDATE tbl_member SET  
        username = '$username',
        password = '$password',
        name = '$name',
        phone = '$phone',
        email = '$email'

        WHERE id = $id
    ";

    $result = mysqli_query($condb, $sql) or die("Error in sql : $sql".mysqli_error($sql));
    
    mysqli_close($condb);
// เช็คการแก้ไขข้อมูล
    if($result) {
        echo '<script type="text/javascript">';
            echo 'alert("Update Successfully");';
            echo 'window.location = "member_list_bootstrap.php";';
        echo '</script>';
        // แก้ไขข้อมูลเสร็จแล้วให้กลับไปที่หน้าform add member ที่เราส่งค่ามา
        // header('Location: member_form_edit.php');
    } else {
        echo '<script type="text/javascript">';
            echo 'alert("ERROR!!");';
            echo 'window.location = "member_list_bootstrap.php";';
        echo '</script>';
    }
    
?>