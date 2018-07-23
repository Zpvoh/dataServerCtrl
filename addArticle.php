<?php
/**
 * Created by PhpStorm.
 * User: zpvoh
 * Date: 18-7-22
 * Time: 下午9:40
 */


$host='localhost:3306';
$user='root';
$pass='82870808qyy';
$db=new mysqli($host, $user, $pass, "articles");
if($db->connect_errno){
    echo "There is no such database.";
}

$query="insert into `articleNames` (`name`, `theme`, `content`) values 
        ('{$_POST['name']}', '{$_POST['theme']}', '{$_POST['content']}')";
$result=$db->query($query);



$db->close();