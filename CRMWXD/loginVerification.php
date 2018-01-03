<?php
/**
 * Created by PhpStorm.
 * User: 10194
 * Date: 2017/12/9
 * Time: 18:21
 */

require("dbconfig.php");

$data=array(
    code=>0,
    message=>""
);

$username=$_POST["username"];
$password=$_POST["password"];
$cookietime=time()+24*60*60;

$sql="select id from user where (username='{$username}') and (password='{$password}')";
$query=mysqli_query($con,$sql);
$row=mysqli_affected_rows($con);
if(!$row){
    $data[code]=1;
    $data[message]=urlencode("账号或者用户名错误");
    echo urldecode(json_encode($data));
}else{
    $data[code]=0;
    $data[message]=urlencode("登录成功");
    setcookie("username",$username,$cookietime);
    setcookie("isLogin",1,$cookietime);
    echo urldecode(json_encode($data));
}
