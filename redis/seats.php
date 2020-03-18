<?php
$redis=new Redis();
$redis->connect('127.0.0.1');


$id=intval($_GET['id']);

//有序集合
$key='ss:seatas';
$redis->zAdd($key,time(),$id);

echo "成功";
?>