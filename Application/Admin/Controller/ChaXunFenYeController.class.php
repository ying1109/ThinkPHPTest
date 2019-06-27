<?php
namespace Admin\Controller;
use Think\Controller;
header('Content-Type:text/html;Charset=utf-8');

class TestController extends Controller {
	// 查询分页
	public function cxfy() {
		// 必须是GET提交
		if (IS_GET) {
		    $name    = $_GET['first_name'];
		    $phone   = $_GET['mobile_phone_number'];
		    $company = $_GET['company'];

		    $map['first_name']          = array('like', "%$name%");
		    $map['mobile_phone_number'] = array('like', "%$phone%");
		    $map['organization']        = array('like', "%$company%");
		}

		// 分页开始
		// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$list  = M("MarketSalesPersonal msp")->order('msp.id DESC')->join('ufent_market_sales_company msc ON msp.company_id=msc.id')->field('msp.*, msc.organization')->where($map)->select();
		$count = count($list);
		$Page  = new \Think\Page($count, 10);// 实例化分页类 传入总记录数和每页显示的记录数
		// 必须写在实例化分页类后
		if($map){
		    foreach($map as $key => $val) {
		        $p->parameter  .=  "$key=".urlencode($val).'&';
		    }
		}
		//分页跳转的时候保证查询条件
		$Page->setConfig('header','<li class="disabled hwh-page-info"><a>共<em>%TOTAL_ROW%</em>条  <em>%NOW_PAGE%</em>/%TOTAL_PAGE%页</a></li>');
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('last','末页');
		$Page->setConfig('first','首页');
		$Page->setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
		$show = bootstrap_page_style($Page->show());// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出

		$list = M("MarketSalesPersonal msp")->order('msp.id DESC')
		    ->join('ufent_market_sales_company msc ON msp.company_id=msc.id')
		    ->field('msp.*, msc.organization')
		    ->where($map)
		    ->limit($Page->firstRow . ',' . $Page->listRows)
		    ->select();

        $this->display();
	}
}