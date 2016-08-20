<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $user=M('user');
        $res=$user->select();
        $this->assign('res',$res);
          $this->display();
    }
     
}