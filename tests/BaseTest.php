<?php
/**
 * Created by PhpStorm.
 * User: zed
 * Date: 17-12-10
 * Time: 上午10:22
 */

namespace Dezsidog\AliyunSDK\Core\Test;


use Dezsidog\AliyunSDK\Core\ClientFactory;
use Dezsidog\AliyunSDK\Core\DefaultAcsClient;

class BaseTest extends BaseTestCase
{
    public function testInstantiation()
    {
        global $config;

        $client = ClientFactory::getClient($config);

        $this->assertInstanceOf(DefaultAcsClient::class, $client);
    }

}