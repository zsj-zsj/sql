<?php
    //连接
    $mysqli=new mysqli('127.0.0.1','root','root','open1906');
    if($mysqli->connect_errno){
        echo "错误码".$mysqli->connect_errno;echo "<br>";
        echo "错误提示".$mysqli->connect_error;
        die;
    }

    $id=$_GET['id'];
    echo "没处理的id：".$id;echo "<br>";

    $id2=intval($_GET['id']);
    echo "处理的id：".$id2;echo "<br>";

    //sql语句
    $sql='select * from reg where l_id='.$id2;

    //执行
    $res=$mysqli->query($sql);

    //循环遍历
    while($data=$res->fetch_assoc()){
        echo "<pre>";print_r($data); echo "</pre>";
    }
?>