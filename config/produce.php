<?php
/**
 * @author: Xiao Nian
 * @contact: xiaonian030@163.com
 * @datetime: 2019-12-01 14:01
 */
return [
    'REGISTER'    => [
        'LAN_IP'         => '172.16.1.174',
        'LAN_PORT'       => 1236
    ],
    'GATEWAY'    => [
        'SERVER_NAME'    => 'ChatGateway',
        'LISTEN_ADDRESS' => '0.0.0.0',
        'PORT'           => 7272,
        'PROCESS_COUNT'     => 4,  //进程数
        'PING_INTERVAL'  => 10,  //心跳间隔
        'LAN_IP'         => '172.16.1.174', //分布式部署时请设置成内网ip（非127.0.0.1）
        'LAN_START_PORT'     => 2300, //内部通讯起始端口
    ]
];
