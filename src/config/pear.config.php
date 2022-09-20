<?php
/**
 * Created by PhpStorm.
 * @purpose Pear-Admin-Component 主配置文件
 * @Author: cbf
 * @Time: 2022/9/18 20:21
 */

return [
    'logo' => [
        'title' => 'Pear Admin',
        'image' => 'admin/images/logo.png',
    ],
    'menu' => [
        'data' => 'admin/data/menu.json',
        'method' => 'GET',
        'accordion' => true,
        'collapse' => false,
        'control' => false,
        'controlWidth' => 500,
        'select' => '10',
        'async' => true,
    ],
    'tab' => [
        'enable' => true,
        'keepState' => true,
        'session' => true,
        'preload' => false,
        'max' => '30',
        'index' =>
            [
                'id' => '10',
                'href' => 'view/console/console1.html',
                'title' => '首页',
            ],
    ],
    'theme' => [
        'defaultColor' => '2',
        'defaultMenu' => 'dark-theme',
        'defaultHeader' => 'light-theme',
        'allowCustom' => true,
        'banner' => false,
    ],
    'colors' => [
        0 => [
            'id' => '1',
            'color' => '#2d8cf0',
            'second' => '#ecf5ff',
        ],
        1 => [
            'id' => '2',
            'color' => '#36b368',
            'second' => '#f0f9eb',
        ],
        2 => [
            'id' => '3',
            'color' => '#f6ad55',
            'second' => '#fdf6ec',
        ],
        3 => [
            'id' => '4',
            'color' => '#f56c6c',
            'second' => '#fef0f0',
        ],
        4 => [
            'id' => '5',
            'color' => '#3963bc',
            'second' => '#ecf5ff',
        ],
    ],
    'other' => [
        'keepLoad' => '1200',
        'autoHead' => false,
        'footer' => false,
    ],
    'header' => [
        'message' => 'admin/data/message.json',
    ],
];

