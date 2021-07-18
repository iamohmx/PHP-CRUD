<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>
</head>
<body>
<h1>ฟอร์มเพิ่มข้อมูลสมาชิก</h1>
    <form action="member_form_add_db.php" method="post">
        username : 
        <input type="text" name="username" placeholder="Please enter Username" required> <br>
        password :
        <input type="password" name="password" placeholder="Please enter Password" required><br>
        name :
        <input type="text" name="name" placeholder="ชื่อ-นามสกุล" required><br>
        Phone : 
        <input type="text" name="phone" placeholder="Numner Phone" required><br> 
        Email :
        <input type="email" name="email" placeholder="Email" required><br>
        <button type="submit"> Add Member </button>


    </form>

</body>
</html>