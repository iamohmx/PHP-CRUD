<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member List</title>
</head>
<body>

    <table border="1">
        <caption>List Members <a href="member_form_add.php"> เพื่มข้อมูล</a></caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>username</th>
                <th>password</th>
                <th>name</th>
                <th>phone</th>
                <th>email</th>
                <th>Edit</th>
                <th>Del</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include 'condb.php';

            $query = "SELECT * FROM tbl_member";
            $result = mysqli_query($condb, $query) or die("Error in sql : $query".mysqli_error($query));
            
            foreach ($result as $row) { ?>
            <tr>
                <td> <?php echo $row['id'] ?> </td>
                <td> <?php echo $row['username'] ?> </td>
                <td> <?php echo $row['password'] ?> </td>
                <td> <?php echo $row['name'] ?> </td>
                <td> <?php echo $row['phone'] ?> </td>
                <td> <?php echo $row['email'] ?> </td>
                <td>
                    <a href="member_form_edit.php?id=<?php echo $row['id'] ?>">edit</a>
                </td>
                <td>
                    <a href="member_delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('ยืนยันการลบ');">delete</a>
                </td>
            </tr>
                <?php } ?>
        </tbody>
    </table>
<?php mysqli_close($condb); ?>
    
</body>
</html>