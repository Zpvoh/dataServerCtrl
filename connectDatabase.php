<?php
/**
 * Created by PhpStorm.
 * User: zpvoh
 * Date: 18-8-17
 * Time: 下午5:58
 */
header("content-type:text/html; charset=utf-8");

$host='localhost:3306';
$user='root';
$hmac_info='651d52949a7a05a5071b4d30a820805cec4b62887763efd42656e0df9c7b064a';
$pass=$_POST['password'];
$key=$_POST['key'];
if(hash_hmac('ripemd256', $pass, $key)!=$hmac_info){
    echo "Invalid password or key";
    exit();
}

$db=new mysqli($host, $user, $pass, "articles");
if($db->connect_errno){
    echo "There is no such database.";
    exit();
}
