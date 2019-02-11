<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 老猫 <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace think;
// [ 入口文件 ]

// 调试模式开关
define("APP_DEBUG", true);

// 定义CMF根目录,可更改此目录
define('CMF_ROOT', __DIR__ . '/../');
//
//// 定义应用目录
define('APP_PATH', CMF_ROOT . 'api/');

// 定义缓存目录
define('RUNTIME_PATH', CMF_ROOT . 'data/runtime/');

// 定义路由目录
define('ROUTE_PATH', APP_PATH . 'route.php');

// 定义配置目录
define('CONFIG_PATH', CMF_ROOT . 'data/config/');

// 定义命名空间
define('APP_NAMESPACE','api');

// 定义网站入口目录
define('WEB_ROOT', __DIR__ . '/');

// 定义插件目录
define('PLUGINS_PATH', __DIR__ . '/plugins/');

// 定义CMF 版本号
define('THINKCMF_VERSION', '5.1.0-beta');

// 加载基础文件
require __DIR__ . '/../vendor/thinkphp/base.php';

// 执行应用并响应
Container::get('app', [APP_PATH])->run()->send();
