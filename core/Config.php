<?php

namespace Core;

class Config{
    private  static $config = [
        'version' => '0.0.1',
        'root_dir' => '/CMS2', //This will likely be / on a live server
        'default_controller' => 'Blog',
        'default_layout' => 'default',
        'default_site_title' => 'Freeskills',
        'db_host' => '127.0.0.1', //DB host please use IP address not domain
        'db_name' => 'cms',
        'db_user' => 'root',
        'db_password' => '',
        'login_cookie_name' => 'asddas2143421czx'
    ];

    public static function get($key)
    {
        return array_key_exists($key, self::$config)? self::$config[$key] : NULL;
    }
}

