<?php
/**
 * Created by PhpStorm.
 * User: zpvoh
 * Date: 18-7-22
 * Time: 下午9:40
 */
include_once "connectDatabase.php";

$query="insert into `articles` (`title`, `theme`, `content`, `description`, `cover_img`) values 
        ('{$_POST['name']}', '{$_POST['theme']}', '{$_POST['content']}', '{$_POST['description']}', '{$_POST['cover_img']}')";
var_dump($result=$db->query($query));

exec("gpio mode 27 out");
exec("gpio write 27 1");
exec("gpio write 27 0");
echo $_POST['name'];

$db->close();