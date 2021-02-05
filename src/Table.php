<?php
/**
 * Desc： 报表组件
 * Author：Fly
 * DateTime：2021/2/2 6:46
 */

namespace flytoper\pac;

use flytoper\pac\libs\Tools;

class Table
{
    protected $table_id;

    //默认属性
    protected $conf = [
        'even' => false,                    //开启表格斑马线
        'page' => false,
        'autoSort' => false,
        'toolbar' => '#bn-table-toolbar',   //开启工具栏
        'defaultToolbar' => [],             //自定义列(filter)、打印(print)、导出(exports)
        'height' => 'full-120',             //固定高度
        'text' => [
            'none' => '无数据',
        ],
        'pk' => 'id',                       //数据表主键，只支持单主键
        'laypage' => 0,                     //默认 不开启分页
        'curr_page' => 1,                   //默认第一页
        'limit' => 50,                      //默认每页50条数据

        'del_msg' => '确认删除此记录吗?',      //删除的一般提示
    ];

    /**
     * @var Search
     */
    protected $search = null;

    /**
     * @var Header
     */
    protected $header = null;

    public function __construct($table_id = '')
    {
        if (!$table_id) {
            $num = rand(10, 99);
            $table_id = "my-table-{$num}";
        }
        $this->table_id = $table_id;
        $this->setConf('elem', "#{$this->table_id}");
    }

    //所有Table的 配置都走这里,支持 单个和数组 配置
    public function setConf($k, $v = null)
    {
        Tools::setConf($this->conf, $k, $v);
        return $this;
    }

    public function setSearch(Search $search)
    {
        $this->search = $search;
//        $where = $this->search->getSearch();
//        $this->conf['curr_page'] = $where['page'];
//        $this->conf['limit'] = $where['limit'];
//        if ($where['sortBy']) {
//            $this->conf['initSort']['field'] = $where['sortBy'];
//        }
//        if ($where['sortType']) {
//            $this->conf['initSort']['type'] = $where['sortType'];
//        }
        return $this;
    }

    public function setHeader(Header $header)
    {
        $this->header = $header;
        return $this->setConf('cols', [$this->header->render()]);
    }

    public function render()
    {
        try {








        } catch (\Exception $e) {
            return Tools::ePrint($e, '组件配置报错');
        }

    }

}

