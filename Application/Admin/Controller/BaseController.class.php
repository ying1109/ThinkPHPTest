<?php
namespace Admin\Controller;
use Think\Controller;
header("Content-type: text/html; charset=utf-8");
class BaseController extends Controller {
    protected function _initialize(){        
        //判断是否登录
        $member_id = $_COOKIE["admin_id"];
        if(!$member_id){
            $this->redirect('Login/login');
        }   
    }
}