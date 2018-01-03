<?php
require("../../dbconfig.php");

$action=$_GET['action'];
switch($action){
    case "add":
        $chargeName=$_POST['chargeName'];
        $origin=$_POST['origin'];
        $post=$_POST['post'];
        $telephone=$_POST['telephone'];
        $nexttime=strtotime($_POST['nexttime']);
        $company=$_POST['company'];
        $contact=$_POST['contact'];
        $sex=$_POST['sex'];
        $email=$_POST['email'];
        $nextcontent=$_POST['nextcontent'];
        $province=$_POST['province'];
        $city=$_POST['city'];
        $area=$_POST['area'];
        $street=$_POST['street'];
        $remark=$_POST['remark'];
        $create_time=time();
        $email=$_POST['email'];
        $sql="insert into clue values(null,'{$chargeName}','{$telephone}','{$post}','{$origin}','{$province}','{$city}','{$area}','{$street}','{$company}','{$contact}','{$sex}','{$nexttime}','{$nextcontent}','{$remark}','{$create_time}','{$email}',0)";
        $result=mysqli_query($con,$sql);
        if($result){
            header("Location:CluePool.php");
        }else{
            echo $sql;
        }
        break;
    case "update":
        $id=$_POST['hidden'];
        $chargeName=$_POST['chargeName'];
        $origin=$_POST['origin'];
        $post=$_POST['post'];
        $telephone=$_POST['telephone'];
        $nexttime=strtotime($_POST['nexttime']);
        $company=$_POST['company'];
        $contact=$_POST['contact'];
        $sex=$_POST['sex'];
        $email=$_POST['email'];
        $nextcontent=$_POST['nextcontent'];
        $province=$_POST['province'];
        $city=$_POST['city'];
        $area=$_POST['area'];
        $street=$_POST['street'];
        $remark=$_POST['remark'];
        $email=$_POST['email'];
        $sql="update clue set chargeName='{$chargeName}',telephone='{$telephone}',post='{$post}',origin='{$origin}',province='{$province}',city='{$city}',area='{$area}',street='{$street}',company='{$company}',contact='{$contact}',sex='{$sex}',nexttime='{$nexttime}',nextcontent='{$nextcontent}',remark='{$remark}',email='{$email}' where id='{$id}'";
        $result=mysqli_query($con,$sql);
        if($result){
            header("Location:Clue.php");
        }else{
            echo $sql;
        }
        break;
    case "del":
        $id=$_GET['id'];
        $sql="update clue set flag=2 where id='{$id}'";
        mysqli_query($con,$sql);
        header("Location:RecycleBin.php");
        break;
    case "receive":
        $id=$_GET['id'];
        $sql="update clue set flag=1 where id='{$id}'";
        mysqli_query($con,$sql);
        header("Location:Clue.php");
        break;
    case "thdel":
        $id=$_GET['id'];
        $sql="delete from clue where id='{$id}'";
        mysqli_query($con,$sql);
        header("Location:RecycleBin.php");
        break;
    case "recovery":
        $id=$_GET['id'];
        $sql="update clue set flag=0 where id='{$id}'";
        mysqli_query($con,$sql);
        header("Location:CluePool.php");
        break;
}
