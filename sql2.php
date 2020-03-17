<?php
    //连接
    $mysqli=new mysqli('127.0.0.1','root','root','open1906');
    if($mysqli->connect_errno){
        echo "错误码".$mysqli->connect_errno;echo "<br>";
        echo "错误提示".$mysqli->connect_error;
        die;
    }

    $name=$_GET['name'];
    echo "没处理的name：".$name;echo "<br>";

    $name2=addslashes($_GET['name']);
    echo "处理后的name：".$name2;echo "<br>";

    //sql语句
    $sql="select * from reg where l_name='{$name2}'";
    echo $sql;

    //执行
    $res=$mysqli->query($sql);

    //循环遍历
    while($data=$res->fetch_assoc()){
        echo "<pre>";print_r($data); echo "</pre>";
    }
?>