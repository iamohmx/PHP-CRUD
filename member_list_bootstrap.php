<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover table-sm">
                    <h3>List Members <a href="member_form_add_bootstrap.php" class="btn btn-primary"> เพื่มข้อมูล</a></h3>
                    <thead>
                        <tr class="table-dark">
                            <th class="col">ID</th>
                            <th class="col">username</th>
                            <th class="col">password</th>
                            <th class="col">name</th>
                            <th class="col">phone</th>
                            <th class="col">email</th>
                            <th class="col">Edit</th>
                            <th class="col">Del</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'condb.php';

                        $query = "SELECT * FROM tbl_member";
                        $result = mysqli_query($condb, $query) or die("Error in sql : $query" . mysqli_error($query));
                        // echo 'จำนวนข้อมูลที่ QUERY ได้ : '.mysqli_num_rows($result);

                        foreach ($result as $row) { ?>
                            <tr>
                                <th scope="row"> <?php echo $row['id'] ?> </th>
                                <td> <?php echo $row['username'] ?> </td>
                                <td> <?php echo $row['password'] ?> </td>
                                <td> <?php echo $row['name'] ?> </td>
                                <td> <?php echo $row['phone'] ?> </td>
                                <td> <?php echo $row['email'] ?> </td>
                                <td>
                                    <a href="member_form_edit_bootstrap.php?id=<?php echo $row['id'] ?>" class="btn btn-warning btn-sm">edit</a>
                                </td>
                                <td>
                                    <a href="member_delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('ยืนยันการลบ');" class="btn btn-danger btn-sm">ลบ</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php mysqli_close($condb); ?>
            </div>
        </div>
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>