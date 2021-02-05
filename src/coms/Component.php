<?php
/**
 * Desc：组件基类
 * Author：Fly
 * DateTime：2021/2/4 2:19
 */
namespace flytoper\pac\coms;

use flytoper\pac\libs\Tools;

abstract class Component
{
    protected $id;      //组件ID
    protected $label;   //Label
    protected $width;   //组件宽度

    protected $conf = [];       //通用配置
    protected $sub_conf = [];   //组件-特殊配置

    public function __construct($id, $label='', $width='')
    {
        $this->id = $id;
        $label && $this->label = $label;
        $width && $this->width = $width;
        return $this;
    }

    //todo 组件通用配置
    public function setConf($k, $v = '')
    {
        Tools::setConf($this->conf, $k, $v);
        return $this;
    }

    //todo 设置组件的属性
    public function setSubConf($k, $v = null)
    {
        Tools::setConf($this->sub_conf, $k, $v);
        return $this;
    }

    public function width($width, $unit='px')
    {
        if(is_numeric($width)) {
            $width .= $unit;
        }

        $this->width = $width;
        return $this;
    }

    public function value($v)
    {
        return $this->setConf('value', $v);
    }

    public function label($label, $required = false)
    {
        $this->label = $label;
        return $this;
    }

    public function placeHolder($p)
    {
        return $this->setConf('placeholder', $p);
    }

    public function attr($attr)
    {
        return $this->setConf('attr', $attr);
    }


    //todo 组件渲染方法
    abstract function render();

}