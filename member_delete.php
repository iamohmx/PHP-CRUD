<?php 
include 'condb.php';

// echo '<pre>';
// print_r($_GET);
// echo '</pre>';

// echo '<hr>';

// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';

// exit;

// ประกาศตัวแปรรับค่าจาก url $_GET

    $id = $_GET['id'];

// delete data

    $sql = "DELETE FROM tbl_member WHERE id = $id";

    $result = mysqli_query($condb, $sql) or die("Error in sql : $sql".mysqli_error($sql));
    
    mysqli_close($condb);
// เช็คการแก้ไขข้อมูล
    if($result) {
        echo '<script type="text/javascript">';
            echo 'alert("Delete Successfully");';
            echo 'window.location = "member_list.php";';
        echo '</script>';
        // แก้ไขข้อมูลเสร็จแล้วให้กลับไปที่หน้าform add member ที่เราส่งค่ามา
        // header('Location: member_form_edit.php');
    } else {
        echo '<script type="text/javascript">';
            echo 'alert("ERROR!!");';
            echo 'window.location = "member_list.php";';
        echo '</script>';
    }
    
?>