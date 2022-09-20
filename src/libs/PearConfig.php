<?php
/**
 * Created by PhpStorm.
 * @purpose PearAdmin 前端框架的配置文件
 * @Author: cbf
 * @Time: 2022/9/18 21:54
 */

namespace flytoper\pac\libs;

class PearConfig extends Config
{
    protected function __construct()
    {
        parent::__construct();
        $this->config = require_once __DIR__ . '/../config/pear.config.php';
    }

    /**
     * 获取实例
     * @return Config|null
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
