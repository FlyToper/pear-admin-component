<?php
/**
 * Created by PhpStorm.
 * @purpose 描述
 * @Author: cbf
 * @Time: 2022/9/20 22:02
 */

namespace flytoper\pac\libs;

use flytoper\pac\traits\SingleTrait;

class Menu
{
    use SingleTrait;

    protected $menuData = [];

    private function __construct()
    {
        $this->menuData = require_once __DIR__ . '/../config/menu.php';
    }

    public function get()
    {
        return $this->menuData;
    }

    public function set($menu)
    {
        $this->menuData = $menu;
    }


}