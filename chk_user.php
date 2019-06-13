
<?php
echo $_POST['username'];
echo"<br>";
echo $_POST['pw'];
echo"<br>";
echo"<hr>";

include ("connect_db.php");
$con = connect_db();

$sql_user = mysqli_query($con,"SELECT permiss_id,user_id,pass_id FROM user WHERE user_id = '$_POST[username]' AND pass_id = '$_POST[pw]'")or die("SQL chk_user.php ERROR".mysqli_error($con));
list($permiss_id,$user_name,$password)=mysqli_fetch_row($sql_user);

echo$user_name;
echo"<br>";
echo $password;
echo"<br>";
echo"<hr>";

if($user_name==$_POST['username'] && $password==$_POST['pw']){
echo"pass";
}else{
 echo"GG";
}
mysqli_close($con);
?>