<?php

$respones = [
    'error'=>0,
    'msg' =>'ok',
    'data'=>[
        'name'=>'zhangsan',
        'age'=>'10'
    ]
];

echo json_encode($respones);

?>