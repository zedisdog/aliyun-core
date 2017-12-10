<?php
/**
 * Created by PhpStorm.
 * User: zed
 * Date: 17-12-10
 * Time: 上午10:22
 */

namespace Dezsidog\AliyunSDK\Core\Test;


use Dezsidog\AliyunSDK\Core\Profile\DefaultProfile;

class BaseTest extends BaseTestCase
{
    public function testInstantiation()
    {
        global $config;

        $client = DefaultProfile::getProfile($config['region'], $config['accessKeyId'], $config['accessKeySecret']);

        $this->assertInstanceOf(DefaultProfile::class, $client);
    }

}