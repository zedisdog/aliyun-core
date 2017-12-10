<?php
/**
 * Created by PhpStorm.
 * User: zed
 * Date: 17-12-10
 * Time: 上午10:22
 */

namespace Dezsidog\AliyunSDK\Core\Test;


use Dezsidog\AliyunSDK\Core\DefaultAcsClient;
use Dezsidog\AliyunSDK\Core\Profile\DefaultProfile;

class BaseTest extends BaseTestCase
{
    public function testInstantiation()
    {
        global $config;

        $profile = DefaultProfile::getProfile($config['region'], $config['accessKeyId'], $config['accessKeySecret']);

        if (!empty($config['services'])) {
            foreach ($config['services'] as $service) {
                DefaultProfile::addEndpoint($service['end_point_name'], $config['region'], $service['product_name'], $service['domain']);
            }
        }

        $this->assertInstanceOf(DefaultProfile::class, $profile);

        $client = new DefaultAcsClient($profile);

        $this->assertInstanceOf(DefaultAcsClient::class, $client);
    }

}