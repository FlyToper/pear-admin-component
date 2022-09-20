<?php
/**
 * Desc： 配置文件类
 * Author：Fly
 * DateTime：2021/2/2 6:53
 */

namespace flytoper\pac\libs;

class Config
{
    protected static $instance = null;

    // 配置数组
    protected $config = [];

    protected function __construct()
    {
        $this->config = require_once __DIR__ . '/../config/config.php';
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

    /**
     * 获取PearAdmin前端配置信息
     * @param $retJson bool 是否需要返回Json类型
     * @return false|mixed|string
     */
    public function readAll($retJson = false)
    {
        if ($retJson) {
            return json_encode($this->config, JSON_UNESCAPED_UNICODE);
        }
        return $this->config;
    }

    /**
     * 获取单个配置项
     * @param $key string key，支持 k1.k2.k3 格式
     * @param $default mixed 默认值
     * @return array|mixed|null
     */
    public function get($key, $default = null)
    {
        return Tools::multiLevelArrayGet($this->config, $key, $default);
    }

    public function set($key, $value)
    {
        return Tools::multiLevelArraySet($this->config, $key, $value);
    }

    public function remove($key)
    {
        return Tools::multiLevelArrayRemove($this->config, $key);
    }

    /**
     * 批量获取配置项
     * @param array $keys key数组
     * @param $check_all bool 是否严格模式，true=全部key存在才返回，否则返回null
     * @return array|null
     */
    public function batchGet(array $keys, $check_all = false)
    {
        $data = [];
        foreach ($keys as $key) {
            $v = $this->get($key);
            if ($v === null && $check_all) {
                return null;
            }

            $data[$key] = $v;
        }
        return $data;
    }

    /**
     * 批量设置配置项
     * @param array $data [k1 => v1, k2 => v2]
     * @return array|mixed
     */
    public function batchSet(array $data)
    {
        foreach ($data as $key => $value) {
            $this->set($key, $value);
        }
        return $this->config;
    }


}