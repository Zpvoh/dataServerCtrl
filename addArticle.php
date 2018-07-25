<?php
/**
 * Created by PhpStorm.
 * User: zpvoh
 * Date: 18-7-22
 * Time: 下午9:40
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

$name_decode=$_POST['name'];

$query="insert into `articleNames` (`name`, `theme`, `content`) values 
        ('{$name_decode}', '{$_POST['theme']}', '{$_POST['content']}')";
$result=$db->query($query);

exec("gpio mode 27 out");
exec("gpio write 27 1");
exec("gpio write 27 0");
echo $_POST['name'];

$db->close();