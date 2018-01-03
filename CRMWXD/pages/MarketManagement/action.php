<?php
/**
 * Created by PhpStorm.
 * User: 10194
 * Date: 2017/12/10
 * Time: 19:56
 */
require("../../dbconfig.php");
$action=$_GET["action"];
$id=$_GET["id"];
$data=array(
    code=>0,
    message=>""
);
switch($action){
    case "add":
        $name=$_POST["name"];
        $message=$_POST["message"];
        $address=$_POST["address"];
        $addtime=time();
        if($name==''){
            $data[code]=1;
            $data[message]=urlencode("市场名称不能为空");
            echo urldecode(json_encode($data));
        }else if($message==''){
            $data[code]=2;
            $data[message]=urlencode("市场信息不能为空");
            echo urldecode(json_encode($data));
        }else if($address==''){
            $data[code]=3;
            $data[message]=urlencode("市场地址不能为空");
            echo urldecode(json_encode($data));
        }else{
            $sql="insert into market_management values(null,'{$name}','{$message}','{$address}','{$addtime}')";
            $result=mysqli_query($con,$sql);
            if($result){
                $data[code]=0;
                $data[message]=urlencode("添加成功");
                echo urldecode(json_encode($data));
            }else{
                $data[code]=4;
                $data[message]=urlencode("添加失败");
                echo urldecode(json_encode($data));
            }
        }
        break;
    case "del":
        $sql="delete from market_management where id={$id}";
        mysqli_query($con,$sql);
        header("Location:Market.php");
        break;
    case "update":
        $id=$_POST["id"];
        $name=$_POST["name"];
        $message=$_POST["message"];
        $address=$_POST["address"];
        if($name==""){
            $data[code]=1;
            $data[message]=urlencode("市场名称不能为空");
            echo urldecode(json_encode($data));
        }else if($message==''){
            $data[code]=2;
            $data[message]=urlencode("市场信息不能为空");
            echo urldecode(json_encode($data));
        }else if($address==''){
            $data[code]=3;
            $data[message]=urlencode("市场地址不能为空");
            echo urldecode(json_encode($data));
        }else{
            $sql="update market_management set name='{$name}',message='{$message}',address='{$address}' where id='{$id}'";
            $result=mysqli_query($con,$sql);
            if($result){
                $data[code]=0;
                $data[message]=urlencode("修改成功");
                echo urldecode(json_encode($data));
            }else{
                $data[code]=4;
                $data[message]=urlencode("修改失败");
                echo urldecode(json_encode($data));
            }
        }
        break;
}