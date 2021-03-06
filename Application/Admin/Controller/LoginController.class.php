<?php
namespace Admin\Controller;
use Think\Controller;
header('Content-Type:text/html;Charset=utf-8');
class LoginController extends Controller {
    public function login(){
        session('[start]');
        $this->display();
    }
    public function ajax_login(){
        $username = $_POST['username'] ? $_POST['username'] : '';
        $password = $_POST['password'] ? $_POST['password'] : '';
        $time = time();
        if( $username == '' || $password == '' ){
            $this->ajaxReturn(array('res'=>0, 'msg'=>'账号和密码不能为空'));
        }else{
            // $info = M('Admin')->where(array('username'=>$username, 'password'=>md5($password)))->find();
            $info = M('Admin')->where(array('username'=>$username, 'password'=>$password))->find();
            if( !$info ){
                $this->ajaxReturn(array('res'=>0, 'msg'=>'账号或密码错误'));
            }else{
                $data['this_login_time'] = $time;
                $data['this_login_ip'] = $_SERVER["REMOTE_ADDR"];
                $map['admin_id'] = $info['admin_id'];
                M('Admin')->where($map)->save($data);
                //确认登录信息：保存cookie/session
                cookie('admin_id', $info['admin_id']);
                session('admin_info', $info);
                        
                $this->ajaxReturn($info);
            }
        }
    }
    //退出登录
    public function loginOut(){
        $map['admin_id']         = $_COOKIE['admin_id'];
        $info                    = M('Admin')->where($map)->find();
        $data['last_login_time'] = $info['last_login_time'];
        $data['last_login_ip']   = $info['last_login_ip'];
        $data['this_login_time'] = 0;
        $data['this_login_ip']   = 0;
        M('Admin')->where($map)->save($data);
        cookie('admin_id', null);
        session('admin_info', null);
        session('[destroy]');
        $this->redirect('Login/login');
    }


    public function login1 () {
        if (IS_POST) {
            // $map['username'] = $_POST['username'];
            // $map['_string'] = 'username=' . $_POST['password'] . 'OR 1=1';
            // $map['password'] = $_POST['password'];

            $username = $_POST['username'];
            $password = $_POST['password'];

            // $info = M('Admin')->where($map)->find();
            $info = M('Admin')->where(array ('username'=>$username, 'password'=>$password, ))->find();
            if ($info) {
                echo "<pre>";
                var_dump($info);
                var_dump( 'YES' );
                echo M()->getLastSql();
                die;
            } else {
                echo "<pre>";
                var_dump($info);
                var_dump('NO');
                echo M()->getLastSql();
                die;
            }

        }

        $this->display();
    }
}