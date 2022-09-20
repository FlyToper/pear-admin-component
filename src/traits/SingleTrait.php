<?php
/**
 * Created by PhpStorm.
 * @purpose 单例模式 Trait
 * @Author: cbf
 * @Time: 2022/9/20 22:07
 */
namespace flytoper\pac\traits;

trait SingleTrait
{
    protected static $instance = null;
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
