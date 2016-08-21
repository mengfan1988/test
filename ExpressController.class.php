<?php

namespace Admin\Controller;

use Admin\Controller\BaseController;

/**
 *  快递信息类
 */
class ExpressController extends BaseController {

    //ajax请求的方法,主要的分页内容,display一个模板,里面是表格内容.ajax请求此方法,返回此模板. 
    public function showExpress() {
        $express = M('express_info');
        $p = I('get.p', 1);
        $pagesize = 4;
        $res = $express->page("{$p},{$pagesize}")->select();
        $this->assign('res', $res);
        $this->display();
    }

    /**
     *  ajax分页,取出共有多少页码,传给jquery.
     */
    public function expressList() {
        $pages = ceil(M('express_info')->count() / 4);
        $this->assign('pages', $pages);
        $this->display();
    }

  
}
