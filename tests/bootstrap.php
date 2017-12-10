<?php
/**
 * Created by PhpStorm.
 * User: zed
 * Date: 17-12-10
 * Time: 上午10:15
 */
require_once 'vendor/autoload.php';

$config = [
    'accessKeyId' => 'access key',
    'accessKeySecret' => 'access secret',
    'region' => 'cn-hangzhou',
    'services' => [
        [
            'product_name' => 'Dysmsapi',
            'domain' => 'dysmsapi.aliyuncs.com',
            'end_point_name' => 'cn-hangzhou',
        ],
    ],
];