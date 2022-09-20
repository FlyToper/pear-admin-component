<?php
/**
 * Created by PhpStorm.
 * @purpose 测试
 * @Author: cbf
 * @Time: 2022/9/18 20:23
 */

$func = $argv[1];   //需要测试的方法

require_once '../vendor/autoload.php';

if (function_exists($func)) {
    $func();
} else {
    echo "{$func} 方法不存在" . PHP_EOL;
}

// 将Json配置转成php数组
function testJson2Arr()
{
    $json = file_get_contents("../src/config/menu.json");
    $arr = json_decode($json, true);
    var_export($arr);
}

function testConfigReadAll()
{
    $arr = \flytoper\pac\libs\Config::getInstance()->readAll();
    print_r($arr);
}

function testPearConfigReadAll()
{
    $arr = \flytoper\pac\libs\PearConfig::getInstance()->readAll();
    print_r($arr);
}

function testConfigGet()
{
    $testArr = [
        'logo',
        'logo.title',
        'logoXXX',
        'logo.XXX',
        'tab.index.title',
    ];

    foreach ($testArr as $key) {
        echo "------------[key={$key}]------------------" . PHP_EOL;
        if ($v = \flytoper\pac\libs\Config::getInstance()->get($key)) {
            print_r($v);
        } else {
            print_r("【配置不存在】");
        }
        echo PHP_EOL;
        echo "---------------------------------------" . PHP_EOL;
    }
}

function testPearConfigGet()
{
    $testArr = [
        'logo',
        'logo.title',
        'logoXXX',
        'logo.XXX',
        'tab.index.title',
    ];

    foreach ($testArr as $key) {
        echo "------------[key={$key}]------------------" . PHP_EOL;
        if ($v = \flytoper\pac\libs\PearConfig::getInstance()->get($key)) {
            print_r($v);
        } else {
            print_r("【配置不存在】");
        }
        echo PHP_EOL;
        echo "---------------------------------------" . PHP_EOL;
    }
}

function testConfigSet()
{
    $arr = \flytoper\pac\libs\Config::getInstance()->set('a', 1);
    print_r($arr);

    $arr = \flytoper\pac\libs\Config::getInstance()->set('a.b', 1);
    print_r($arr);

//    $arr = \flytoper\pac\libs\Config::getInstance()->remove('a.b');
//    print_r($arr);
}
