<?php
/**
 * Desc：通用表头-基类
 * Author：Fly
 * DateTime：2021/2/4 3:09
 */

namespace flytoper\pac\headers;

use flytoper\pac\libs\Tools;

class Field
{
    public $field;
    public $title;
    public $conf = [];

    public function __construct($field = '', $title = '')
    {
        if ($field) {
            $this->field = $field;
            $this->setConf('field', $field);
        }
        if ($title) {
            $this->setConf('title', $field);
            $this->title = $title;
        }

        return $this;
    }

    public function setConf($k, $v = null)
    {
        Tools::setConf($this->conf, $k, $v);
        return $this;
    }

    public function width($w)
    {
        return $this->setConf('width', $w);
    }

    public function minWidth($w)
    {
        return $this->setConf('minWidth', $w);
    }

    public function sortable($b = true)
    {
        $v = $b ? true : false;
        Tools::setConf($this->conf, 'sort', $v);
        return $this;
    }

}