<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
include("connect_db.php");
$con = connect_db();

$sql = "INSERT INTO user (id, permiss_id, user_id, pass_id,card_id)
VALUES (' ', '3', '$_POST[usrname]', '$_POST[psw]', '$_POST[idcard]')";

$sql_user = mysqli_query($con,"INSERT INTO user (id, permiss_id, user_id, pass_id,card_id) VALUES ('', '3', '$_POST[usrname]', '$_POST[psw]', '$_POST[idcard]')")or die("add_user/ insert error".mysqli_error($con));

mysqli_close($con);

?>
</body>
</html>