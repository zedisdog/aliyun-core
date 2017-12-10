<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: zed
 * Date: 17-12-10
 * Time: 上午11:52
 */

namespace Dezsidog\AliyunSDK\Core;


use Dezsidog\AliyunSDK\Core\Profile\DefaultProfile;

class ClientFactory
{
    protected static $client;

    public static function getClient(array $config)
    {
        if (!self::$client) {
            $profile = DefaultProfile::getProfile($config['region'], $config['access_key_id'], $config['access_key_secret']);

            if (!empty($config['services'])) {
                foreach ($config['services'] as $service) {
                    DefaultProfile::addEndpoint($service['end_point_name'], $config['region'], $service['product_name'], $service['domain']);
                }
            }

            self::$client = new DefaultAcsClient($profile);
        }
        return self::$client;
    }
}