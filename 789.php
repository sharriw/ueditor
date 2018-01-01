<?php
/**
 * Created by PhpStorm.
 * User: kitty
 * Date: 2017-12-30
 * Time: 17:43
 */

$con = mysqli_connect("localhost", "root", "");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}else{
    echo"数据库链接成功!";
}
mysqli_select_db($con, "sharri");


$a = $_POST["username"];
$b = $_POST["password"];

$sql="INSERT INTO t_user (username, password)
VALUES
('$a','$b')";

echo $sql;
mysqli_query($con,$sql);

//$sql = "SELECT * FROM t_user;";
echo "您的用户名是：" . $_POST["username"] . "<br/>";
echo "您的是：" . $_POST["password"] . "<br/>";
mysqli_close($con);
