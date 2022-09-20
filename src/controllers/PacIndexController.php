<?php
/**
 * Desc：入口控制器必须继承的基类控制器
 * Author：Fly
 * DateTime：2021/2/6 6:51
 */

namespace flytoper\pac\controllers;

use flytoper\pac\libs\PacBuilder;
use flytoper\pac\libs\Tools;

class PacIndexController
{



    public function index()
    {

    }

    public function pearConfig()
    {
        $data = PacBuilder::getPearConfig();
        return Tools::jsonReturn($data);
    }

    public function login()
    {

    }

    public function menu()
    {
        return PacBuilder::getMenuData();
    }

    public function config()
    {
        return PacBuilder::getConfig();
    }


}