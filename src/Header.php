<?php
/**
 * Desc：
 * Author：Fly
 * DateTime：2021/2/2 6:51
 */

namespace FlyToper\PearAdminComponent\headers;

class Header
{
    public $cols = [];
    protected $align;

    public function __construct($cols = [], $align = 'center')
    {
        $this->cols = $cols;
        $this->align = $align;
        return $this;
    }

    public function align($v)
    {
        $this->align = $v;
        return $this;
    }


    public function render()
    {
        $data = [];
        foreach ($this->cols as $field => $title) {
            if($title instanceof CheckBox) {
                $item = ['type' => 'checkbox'];
            }else if($title instanceof Basic) {
                $item = $title->conf;
                if(empty($item['align'])) {
                    //使用默认对齐方式
                    $item['align'] = $this->align;
                }

                $item['field'] = $field;
                $item['title'] = $title->title;
            } else {
                $item = [
                    'field' => $field,
                    'title' => $title,
                    'align' => $this->align,
                ];
            }

            $data[] = $item;
        }

        return $data;
    }

}