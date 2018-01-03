<?php
/**
 * Created by PhpStorm.
 * User: 10194
 * Date: 2017/12/9
 * Time: 10:02
 */

require("dbconfig.php");

$data=array(
    code=>0,
    message=>""
);

$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];
$addtime=time();

$sql="select * from user where username='{$username}'";
$query=mysqli_query($con,$sql);
$row=mysqli_affected_rows($con);
if($username==""){
    $data[code]=1;
    $data[message]=urlencode("用户名不能为空");
//    echo "1";
    echo urldecode(json_encode($data));
}else if($row){
    $data[code]=2;
    $data[message]=urlencode("用户名已存在");
//    echo "2";
    echo urldecode(json_encode($data));
}else if($email==""){
    $data[code]=3;
    $data[message]=urlencode("邮箱不能为空");
//    echo "3";
    echo urldecode(json_encode($data));
}else if($password==""){
    $data[code]=4;
    $data[message]=urlencode("密码不能为空");
//    echo "4";
    echo urldecode(json_encode($data));
}else if($password!=$repassword){
    $data[code]=5;
    $data[message]=urlencode("两次密码不一致");
//    echo "5";
    echo urldecode(json_encode($data));
}else{
    $data[code]=0;
    $data[message]=urlencode("注册成功");
    $sql="insert into user(username,email,password,addtime) values('{$username}','{$email}','{$password}','{$addtime}')";
    mysqli_query($con,$sql);
    echo urldecode(json_encode($data));
}