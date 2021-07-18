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

<?php
include 'condb.php';
// ไอดีที่ส่งมาแก้ไข
$id = $_GET['id'];
// echo $id;
$query = "SELECT * FROM tbl_member WHERE id=$id";
$result = mysqli_query($condb, $query) or die("Error in sql : $query" . mysqli_error($query));
$row = mysqli_fetch_array($result);

// print_r($row);


?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Update Member</h3>
            <form class="form-horizontal" action="member_form_edit_db.php" method="post">
            <div class="input-group input-group-sm mb-3">
                    <label for="inputID" class="col-sm-1 ">ID</label>
                    <div class="col-sm-5">
                        <input type="number" name="id" class="form-control" id="inputID" value="<?php echo $row['id'] ?>" readonly>
                    </div>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <label for="inputusername" class="col-sm-1 ">Username</label>
                    <div class="col-sm-5">
                        <input type="text" name="username" class="form-control" id="inputusername" value="<?php echo $row['username'] ?>" required>
                    </div>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <label for="inputpassword" class="col-sm-1 ">Password</label>
                    <div class="col-sm-5">
                        <input type="password" name="password" class="form-control" id="inputpassword" value="<?php echo $row['password'] ?>" required>
                    </div>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <label for="inputname" class="col-sm-1 ">Name</label>
                    <div class="col-sm-5">
                        <input type="text" name="name" class="form-control" id="inputname" value="<?php echo $row['name'] ?>" required>
                    </div>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <label for="inputphone" class="col-sm-1 ">Phone</label>
                    <div class="col-sm-5">
                        <input type="text" name="phone" class="form-control" id="inputphone" value="<?php echo $row['phone'] ?>" required>
                    </div>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <label for="inputemail" class="col-sm-1 ">Email</label>
                    <div class="col-sm-5">
                        <input type="email" name="email" class="form-control" id="inputemail" value="<?php echo $row['email'] ?>" required>
                    </div>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <label class="col-sm-1 "></label>
                    <div class="col-sm-1">
                        <button type="submit" class="btn btn-primary"> SAVE</button>
                    </div>
                </div>
            </form>
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