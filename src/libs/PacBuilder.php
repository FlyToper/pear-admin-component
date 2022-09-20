<?php
/**
 * Created by PhpStorm.
 * @purpose Pac 核心功能构造器
 * @Author: cbf
 * @Time: 2022/9/18 19:55
 */
namespace flytoper\pac\libs;

class PacBuilder
{
    // 首页
    public static function getIndexPage(callable $func = null)
    {
        return __DIR__ . '/../views/index.html';
    }

    // 登陆页
    public static function getLoginPage()
    {

    }

    public static function getMenuData()
    {
        return Menu::getInstance()->get();
    }

    public static function getPearConfig($key = null, $default = null)
    {
        if ($key == null) {
            return PearConfig::getInstance()->readAll();
        } else {
            return PearConfig::getInstance()->get($key, $default);
        }
    }

    public static function setPearConfig()
    {

    }

    public static function getConfig($key = null, $default = null)
    {
        if ($key == null) {
            return Config::getInstance()->readAll();
        } else {
            return Config::getInstance()->get($key, $default);
        }
    }

    public static function setConfig()
    {

    }

}