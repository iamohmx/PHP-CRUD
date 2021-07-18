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
                <br><br>
                <h3>Add Member</h3>
                <form class="form-horizontal" action="member_form_add_db.php" method="post">
                    <div class="input-group input-group-sm mb-3">
                        <label for="inputusername" class="col-sm-1 ">Username</label>
                        <div class="col-sm-5">
                            <input type="text" name="username" class="form-control" id="inputusername" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <label for="inputpassword" class="col-sm-1 ">Password</label>
                        <div class="col-sm-5">
                            <input type="password" name="password" class="form-control" id="inputpassword" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <label for="inputname" class="col-sm-1 ">Name</label>
                        <div class="col-sm-5">
                            <input type="text" name="name" class="form-control" id="inputname" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <label for="inputphone" class="col-sm-1 ">Phone</label>
                        <div class="col-sm-5">
                            <input type="text" name="phone" class="form-control" id="inputphone" placeholder="Phone" required>
                        </div>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <label for="inputemail" class="col-sm-1 ">Email</label>
                        <div class="col-sm-5">
                            <input type="email" name="email" class="form-control" id="inputemail" placeholder="Email" required>
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