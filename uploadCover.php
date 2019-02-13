<?php
/**
 * Created by PhpStorm.
 * User: zpvoh
 * Date: 18-8-16
 * Time: 下午11:34
 */

header("content-type:text/html; charset=utf-8");

$filename=$_FILES['cover']['name'];
$tmp=$_FILES['cover']['tmp_name'];
$path="covers/".$filename;
if(!move_uploaded_file($tmp, $path)){
    die("{'error':'uploading file filed'}");
}

echo "{}";