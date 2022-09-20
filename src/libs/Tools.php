<?php
/**
 * Desc： 通用工具助手类
 * Author：Fly
 * DateTime：2021/2/2 6:53
 */

namespace flytoper\pac\libs;

class Tools
{
    //todo JSON一般返回方式
    public static function outputJson($code, $msg = '', $data = [])
    {
        $resp = [
            'code' => $code,
            'msg' => $msg ?: ($code == 1 ? 'SUCCESS' : 'FAIL'),
            'data' => $data,
        ];

        if (function_exists('json')) {
            return json($resp);
        } else {
            return json_encode($resp);
        }
    }

    /**
     * 返回Json数据
     * @param $data
     * @return false|string
     */
    public static function jsonReturn($data)
    {
        if (function_exists('json')) {
            return json($data);
        } else {
            return json_encode($data);
        }
    }

    //todo 错误信息格式化返回
    public static function ePrint(\Exception $e, $tips = '')
    {
        return "{$tips}：{$e->getMessage()} #{$e->getFile()} #{$e->getLine()}";
    }

    //todo 通用组件属性配置
    public static function setConf(&$conf, $k, $v = null)
    {
        if (is_array($k)) {
            foreach ($k as $name => $val) {
                $conf[$name] = $val;
            }
        } else if ($v || $v === false) {
            $conf[$k] = $v;
        } else if ($v === '' || $v === null) {
            //删除属性
            unset($conf[$k]);
        }
    }

    /**
     * 获取多层级数组数据
     * @param $arr array 数据源
     * @param $keyStr string 数组的key，支持格式：k1.k2.k3
     * @param $default mixed 默认值
     * @return mixed|null
     */
    public static function multiLevelArrayGet($arr, $keyStr, $default = null)
    {
        $keys = explode('.', $keyStr); //k1.k2.k3 => [k1, k2, k3]
        $t_arr = $arr;

        foreach ($keys as $key) {
            if (!isset($t_arr[$key])) {
                return $default;
            }
            $t_arr = $t_arr[$key];
        }
        return $t_arr;
    }

    /**
     * 设置多层级数组数据
     * @param $arr array 数据源
     * @param $keyStr string 数组key，支持格式：k1.k2.k3
     * @param $value mixed 默认值
     * @return array
     */
    public static function multiLevelArraySet(array &$arr, $keyStr, $value)
    {
        $keys = explode('.', $keyStr);
        $cnt = count($keys);

        if ($cnt == 1) {
            $arr[$keyStr] = $value;
        } elseif ($cnt == 2) {
            $arr[$keys[0]][$keys[1]] = $value;
        } elseif ($cnt == 3) {
            $arr[$keys[0]][$keys[1]][$keys[2]] = $value;
        }
        return $arr;
    }

    public static function multiLevelArrayRemove(&$arr, $keyStr)
    {
        $keys = explode('.', $keyStr);
        $cnt = count($keys);

        if ($cnt == 1) {
            unset($arr[$keyStr]);
        } elseif ($cnt == 2) {
            unset($arr[$keys[0]][$keys[1]]);
        } elseif ($cnt == 3) {
            unset($arr[$keys[0]][$keys[1]][$keys[2]]);
        }
        return $arr;
    }


}