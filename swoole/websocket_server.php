<?php

//websocket 服务器的代码    
//php扩展 swoole  cli 命令行 模式运行

$server = new Swoole\WebSocket\Server("0.0.0.0", 9501);

//有客户端连接服务器
$server->on('open', function (Swoole\WebSocket\Server $server, $request) {
    echo "发消息人的来访问了 编号：fd{$request->fd}\n";
});

//建立连接之后   客户端向服务器发送数据
$server->on('message', function (Swoole\WebSocket\Server $server, $frame) {
    echo "客户端发来的数据： {$frame->fd}:{$frame->data},opcode:{$frame->opcode},fin:{$frame->finish}\n";
    $server->push($frame->fd, "我是服务器");
});

//客户端断开连接    关闭网页时  显示这里的
$server->on('close', function ($ser, $fd) {
    echo "客户端标号 {$fd} 走了\n";
});

$server->start();

?>