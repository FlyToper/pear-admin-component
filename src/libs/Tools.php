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

        if(function_exists('json')) {
            return json($resp);
        } else {
            return json_encode($resp);
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
        } else if($v === '' || $v === null) {
            //删除属性
            unset($conf[$k]);
        }
    }



}