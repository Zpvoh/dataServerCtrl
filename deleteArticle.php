<?php
/**
 * Created by PhpStorm.
 * User: zpvoh
 * Date: 18-8-17
 * Time: 下午11:18
 */

include_once "connectDatabase.php";

$getPath="select cover_img from articles where id={$_POST['id']}";
$rs_path=$db->query($getPath);
$path=$rs_path->fetch_assoc()['cover_img'];

$query="delete from articles where id={$_POST['id']}";
$result=$db->query($query);

if($result=$db->query($query)){
    unlink($path);
    echo "Succeed";
}else{
    die("Failed");
}

exec("gpio mode 27 out");
exec("gpio write 27 1");
exec("gpio write 27 0");

$db->close();