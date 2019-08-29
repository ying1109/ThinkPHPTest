<?php
namespace Admin\Model;
use Think\Model;

class Table1Model extends Model {

	// 列表
	public function lists($map, $firstRow = 0, $listRows = 0, $sort = "id asc") {
		$M    = M('Table1');
		$list = $M->where($map)->order($sort)->limit($firstRow, $listRows)->select();

        return $list;
	}

	//新增
    public function add($data){
		$M   = M('Table1');
		$res = $M->add($data);
        if ($res) {
            return array('status' => 1, 'res' => $res, 'info' => '添加成功！');
        }else{
            return array('status' => 0, 'info' => '添加失败！');
        }
    }

    // 更新
    public function update($map,$datas){
		$M   = M('Table1');
		$res = $M->where($map)->save($datas);
        if ($res) {
            return array('status' => 1, 'res' => $res, 'info' => '修改成功！');
        }else{
            return array('status' => 0, 'info' => '修改失败！');
        }
    }

    // 详情
    public function info($map){
		$M    = M('Table1');
		$info = $M->where($map)->find();
        return $info;
    }
}