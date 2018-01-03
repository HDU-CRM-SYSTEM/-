<?php
/**
 * Created by PhpStorm.
 * User: 10194
 * Date: 2017/12/11
 * Time: 21:42
 */
if(!$_COOKIE["isLogin"]){
    header("Location:../../CRMlogin.php");
}