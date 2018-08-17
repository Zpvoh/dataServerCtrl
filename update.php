<?php
/**
 * Created by PhpStorm.
 * User: zpvoh
 * Date: 18-8-17
 * Time: 下午4:42
 */

include_once "connectDatabase.php";

$query="update `articles` set 
        title='{$_POST['name']}',
        theme='{$_POST['theme']}',
        description='{$_POST['description']}',
        cover_img='{$_POST['cover_img']}',
        content='{$_POST['content']}'
        where id={$_POST['id']}";

if($result=$db->query($query)){
    echo "Succeed";
}else{
    die("Failed");
}

exec("gpio mode 27 out");
exec("gpio write 27 1");
exec("gpio write 27 0");
echo $_POST['name'];

$db->close();