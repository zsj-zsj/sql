<?php
    $user='root';
    $pass='root';
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=open1906', $user, $pass);

    $id=$_GET['id'];

    $sql="select * from reg where l_id=?";

    $stmt=$dbh->prepare($sql);
    $stmt->bindParam(1,$id);
    $stmt->execute();


              //$res->fetchAll() 
    while($data=$stmt->fetch(PDO::FETCH_ASSOC)){
        echo"<pre>";print_r($data);echo "</pre>";
    }

?>