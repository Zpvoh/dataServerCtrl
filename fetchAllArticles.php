<?php
/**
 * Created by PhpStorm.
 * User: zpvoh
 * Date: 18-8-16
 * Time: 下午5:22
 */
include_once "connectDatabase.php";

$query="select * from articles";
$result=$db->query($query);
$ans=array();

while($row=$result->fetch_assoc()){
    array_push($ans, $row);
}

/*exec("gpio mode 27 out");
exec("gpio write 27 1");
exec("gpio write 27 0");*/
echo json_encode($ans);

$db->close();