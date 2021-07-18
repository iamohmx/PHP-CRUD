<?php
    include 'condb.php';

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    // echo '<hr>';

    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';
    // ประกาศตัวแปรรับค่าจากฟอร์ม

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

// เช็คข้อมูลซ้ำ
    $query = "SELECT username FROM tbl_member WHERE username = '$username' ";
    $result = mysqli_query($condb, $query) or die("Error in sql : $query" . mysqli_error($query));
    // echo 'จำนวนข้อมูลที่พบ : ' . mysqli_num_rows($result);
    if (mysqli_num_rows($result) > 0) {
        echo '<script type="text/javascript">';
            echo 'alert("Username นี้มีคนใช้แล้วจ้า");';
            echo 'window.location = "member_form_add_bootstrap.php";';
        echo '</script>';
    }else {
        // insert into table

        $sql = "INSERT INTO tbl_member 
            (
                username,
                password,
                name,
                phone,
                email)
                VALUES
                ('$username',
                '$password',
                '$name',
                '$phone',
                '$email'
            )";
        
        $result = mysqli_query($condb, $sql) or die("Error in sql : $sql" . mysqli_error($sql));
        mysqli_close($condb);
        if ($result) {
            echo '<script type="text/javascript">';
                echo 'alert("Insert Successfully");';
                echo 'window.location = "member_list_bootstrap.php";';
            echo '</script>';
        } else {
            echo '<script type="text/javascript">';
                echo 'alert("ERROR!!");';
                echo 'window.location = "member_list_bootstrap.php";';
            echo '</script>';
        }
    }

exit();
// insert into table

// $sql = "INSERT INTO tbl_member 
//         (username,
//         password,
//         name,
//         phone,
//         email)
//     VALUES
//         ('$username',
//         '$password',
//         '$name',
//         '$phone',
//         '$email')
//     ";

// $result = mysqli_query($condb, $sql) or die("Error in sql : $sql" . mysqli_error($sql));


// // เช็คการเพิ่มข้อมูล
// if ($result) {
//     echo '<script type="text/javascript">';
//         echo 'alert("Insert Successfully");';
//         echo 'window.location = "member_list_bootstrap.php";';
//     echo '</script>';
// } else {
//     echo '<script type="text/javascript">';
//         echo 'alert("ERROR!!");';
//         echo 'window.location = "member_list_bootstrap.php";';
//     echo '</script>';
// }
