<?php
namespace Admin\Controller;
use Think\Controller;
header('Content-Type:text/html;Charset=utf-8');

class TestController extends Controller {

    public function phpinfo() {
        echo "<pre>";
        var_dump(phpinfo());
        die;
    }

	public function index () {
		$this->display();
	}

    public function test() {
        var_dump(md5(md5('admin') . md5(123456)));
	}

	// 输出特定时间
	public function time111() {
		// year
		$year  = mktime(0, 0, 0, 1, 1, date('Y'));
        $year1 = date('Y-m-d', $year);

		// month
		// $month     = mktime(0, 0, 0, date('m'), 1, date('Y'));
		// $month1 = date('Y-m-d', $month);

		// week
		$week  = mktime(0, 0, 0, date('m'), date('d') - date('w') + 1, date('y'));
        $week1 = date('Y-m-d', $week);

		// yesterday
		$yesterday = mktime(0, 0, 0, date('m'), date('d') - 1, date('Y'));
		$yesterday1 = date('Y-m-d', $yesterday);

		// today
		$today     = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
		$today1 = date('Y-m-d', $today);

		// 两月前
		$month     = mktime(0, 0, 0, date('m') - 2, date('d') + 1, date('Y'));
		$month1    = date('Y-m-d', $month);

		$date = date("Ymd");


		var_dump($date);
		echo "<br>";

		// $this->display();
	}

	// 通过PHP组合html
	public function conHI() {
		$selv = array(1,2,3,4,5);//下拉列表值
		$dbv  = 3;

		foreach($selv as $s){
			$issl ='';
			if($s == $dbv) {
				$issl = 'selected';
			}
			// $str .= "<option value='$s' $issl>-" . $s . "-</option>";
		}

		// echo '<select >' . $str . '</select>';

		// $this->display();
	}

	/**
	 * 二维数组根据某个字段排序
	 * 功能：按照用户的年龄倒序排序
	 * @author ruxing.li
	 */
	public function erArrSort() {
		$arrUsers = array(
		    array(
		            'id'   => 1,
		            'name' => '张三',
		            'age'  => '-25',
		    ),
		    array(
		            'id'   => 2,
		            'name' => '李四',
		            'age'  => '-23',
		    ),
		    array(
		            'id'     => 3,
		            'name' => '王五',
		            'age'  => '-40',
		    ),
		    array(
		            'id'   => 4,
		            'name' => '赵六',
		            'age'  => '-31',
		    ),
		    array(
		            'id'   => 5,
		            'name' => '黄七',
		            'age'  => '-20',
		    ),
		);

		$arr = array(
            0 => array(
                'id'   => 5,
                'name' => '张三三',
                'age'  => 6,
			),
			1 => array(
				'id'   => 7,
				'name' => '张二二',
				'age'  => 8,
			),
			2 => array(
				'id'   => 4,
				'name' => '李四四',
				'age'  => 4,
			)
		);

        // foreach ($arr as $k => $v) {
            $arr[0]['age'] = $arr[0]['age'] + 3;
		// }
        echo "<pre>";
        var_dump($arr);
        die;

		foreach ($arrUsers as $k => $v) {
			foreach ($arr as $k1 => $v1) {
				if ($v['id'] == $v1['id']) {
					$arrUsers[3]['age'] = $v['age'] + $v1['age'];
					// break;
				}
			}
		}
		echo "<pre>";
		var_dump($arrUsers);
		die;

		$sort = array(
	        'direction' => 'SORT_ASC', //排序顺序标志 SORT_DESC 降序；SORT_ASC 升序
	        'field'     => 'age',       //排序字段
		);
		$arrSort = array();
		foreach($arrUsers as $k => $v){
		    foreach($v as $k1 => $v1){
		        $arrSort[$k1][$k] = $v1;
		    }
		}
		echo "<pre>";
		var_dump($arrSort);
		echo "<hr>";
		if($sort['direction']){
		    // array_multisort($arrSort[$sort['field']], constant($sort['direction']), $arrUsers);
		    array_multisort($arrSort['age'], constant($sort['direction']), $arrUsers);
		}
		// echo "<pre>";
		// var_dump($arrUsers);
	}

	// 对象和数组的相互转化
	public function objToArr() {
		$arr = array('a', 'b', 'c', 'd', 'e', 'a', 'c');
		$obj = (object)$arr;
		$arrarr = (array)$obj;
		echo "<pre>";
		// var_dump($obj);
		// var_dump($arrarr);
		var_dump($arr);
		echo "<br>";
		$k = 0;
		var_dump($arr[$k]);
	}

	// 一维数组去重
	public function quChong() {
		$a = array(
			"a"=>"Cat",
			"b"=>"Dog",
			"c"=>"Cat"
		);
        echo "<pre>";
		$b = array_unique($a);
        var_dump(array_unique($a));

        // var_dump(md5(md5('admin') . md5(123456)));
        // die;

		// $aa = array_pop($a);
		// var_dump($aa);
	}

	public function users() {
		$Users = D('Users');
		$list  = $Users->lists();
		// $list = M('Users')->order('user_id asc')->select();
		echo "<pre>";
		var_dump($list);
	}

	public function group_same_key() {
		$arr = [
	        0 => [
				"category" => "red",
				"price"    => 95
	        ],
	        1 => [
				"category" => "blue",
				"price"    => 85
	        ],
	        2 => [
				"category" => "red",
				"price"    => 75
	        ]
	    ];
        if (condition) {
        	# code...
        }


	    echo "<pre>";
        var_dump($arr);echo "<hr>";
	    $new_arr = array();
        foreach($arr as $k => $v ){
            $new_arr[$v['category']][] = $v;
        }
        echo "<pre>";
        var_dump($new_arr);
	}
	public function ij() {
		/*$i = 1;
		var_dump($i++); // 1
		$j = 1;
		var_dump(++$j); // 2*/
        SESSION_START();
        if (IS_POST) {
            if (!$_SESSION['is_submit']) {
                $_SESSION['is_submit'] = 1;
                $a = $_POST;
                echo "<pre>";
                var_dump($a);
                die;
            }
        }



        $this->display();

	}

	// 进制转换
	public function jzzh() {
		$a = 8;
		$b = 12;

		// 十进制转二进制
		/*$a10_2 = decbin($a);
		$b10_2 = decbin($b);
		echo $a10_2;	// 1000
		echo "<br>";
		echo $b10_2;	// 1100*/

		// 十进制转十六进制
		/*$a10_16 = dechex($a);
		$b10_16 = dechex($b);
		echo $a10_16;	// 8
		echo "<br>";
		echo $b10_16;	// c*/

		// 十进制转八进制
		$a10_8 = decoct($a);
		$b10_8 = decoct($b);
		echo $a10_8;	// 10
		echo "<br>";
		echo $b10_8;	// 14
	}

	// 位运算
	public function wys() {
		$a = 8;
		$b = 12;

		// 按位与
		// $ab = $a & $b;
		// echo $ab;	// 8
		// 1 0 0 0
		// 1 1 0 0
		// -------
		// 1 0 0 0
		// 都为1时才为1

		// 按位或
		// $ab = $a | $b;
		// echo $ab;	// 12
		// 1 0 0 0
		// 1 1 0 0
		// -------
		// 1 1 0 0
		// 有一个为1就是1

		// 按位异或
		// $ab = $a ^ $b;
		// echo $ab;	// 4
		// 1 0 0 0
		// 1 1 0 0
		// -------
		// 0 1 0 0

		// 按位取反
		$ab = ~$a;
		echo $ab;	// -9
		// 原码
		// 0 0 0 0 1 0 0 0
		// 反码
		// 0 0 0 0 1 0 0 0
		// 补码
		// 0 0 0 0 1 0 0 0
		// 对齐取反
		// 1 1 1 1 0 1 1 1 （左面的1代表符号位1代表负）
		// 因其为负减1得反码
		// 1 1 1 1 0 1 1 0
		// 取反得原码
		// 1 1 1 1 1 0 0 1 （前面1为符号位）
	}

	// 取出二维数组某列
	public function col() {
		$id  = 4;
		$arr = array(
			0 => array(
				'id'   => 5,
				'name' => '张三',
				'age'  => 6,
			),
			1 => array(
				'id'   => 7,
				'name' => '张二',
				'age'  => 8,
			),
			2 => array(
				'id'   => 6,
				'name' => '李四',
				'age'  => 4,
			)
		);
		// $arr2 = array_column($arr, 'name');
		$id_arr = array_column($arr, 'id');
        echo "<pre>";
        var_dump($id_arr);
        die;

		if (in_array($id, $id_arr)) {
			foreach ($arr as $k => $v) {
				if ($id == $v['id']) {
					var_dump($v['id']);
					$arr[$k]['age'] = $v['age'] + 10;
					break;
				}
			}
		} else {
			$a = array(
				'id'   => 8,
				'name' => '李',
				'age'  => 5,
			);
			array_push($arr, $a);
		}
		$arr = json_encode($arr);


		echo "<pre>";
		var_dump($arr);
	}
	
    // 比较数组差集
    public function subtract() {
        $a = array(
            "a"=>"2",
            "b"=>"5",
            "c"=>"8"
        );
        $b = array('5');
        $c = array_diff($a, $b);
        echo "<pre>";
        var_dump($c);

    }
    
	// 比较数组交集
	public function n() {
		$array1 = array("a" => "green", "red", "blue");
		$array2 = array("b" => "green", "yellow", "red", "red");
		$result = array_intersect($array1, $array2);
		echo "<pre>";
		print_r($result);
	}
	
	// 并集
    public function U() {
        $a = array(
            "a"=>"2",
            "b"=>"5",
            "c"=>"8"
        );
        $bb = 5;
        $b = array($bb);
        $c = array_unique(array_merge ($a, $b));
        echo "<pre>";
        var_dump($c);
    }
    
	// 优先级
	public function yxj() {
		$a = true;
		$b = true;
		$c = false;
		if ($a || $b && $c) {
			echo "11111";	// √
		} else {
			echo "22222";
		}
		if (($a || $b) && $c) {
			echo "33333";
		} else {
			echo "44444";	// √
		}
	}

	// 字节
	public function zj() {
		// echo strcmp('mrsoft', 'MRSOFT');
		// echo strnatcmp('mrsoft1', 'MRSOFT2') . "<br>";
		echo Strnatcmp('str2', 'str10');
		substr_replace();
	}

	// 把数据组合成数组
	public function zhsz() {
		$data    = array();
		$name[0] = 'asa';
		$sex[0]  = '男';
		$name[1] = 'sdf';
		$sex[1]  = '男';
		$name[2] = 'kjh';
		$sex[2]  = '女';
		/*for($i = 0; isset($name[$i]); $i++) {
			$data[$i] = array(
				'name'=>$name[$i],
				'sex'=>$sex[$i]
			);
		}*/
		$data = array(
			$name[0] => $sex[0],
			$name[1] => $sex[1],
			$name[2] => $sex[2],
		);

		echo "<pre>";
		var_dump($data);
	}
	public function float() {
		$a = 0.1478;
		var_dump(number_format($a, 2));
	}

	public function charts() {
		$out_put = array(
			0 => array(
				'id'   => 5 * 10,
				'name' => '赵'
			),
			1 => array(
				'id'   => 3 * 10,
				'name' => '钱'
			),
			2 => array(
				'id'   => 6 * 10,
				'name' => '孙'
			)
		);
        

		$arr = array(
			"jan_val"   => "10",
			"feb_val"   => "10",
			"mar_val"   => "10",
			"apr_val"   => "10",
			"may_val"   => "10",
			"jun_val"   => "10",
			"jul_val"   => "10",
			"aug_val"   => "10",
			"sept_val"  => "10",
			"oct_val"   => "10",
			"nov_val"   => "10",
			"dec_val"   => "10",
			"store_val" => "15"
		);

		// unset($arr['store_val']);
		// $a = array_sum($arr);
		array_pop($arr);
		// echo "<pre>";
		// var_dump($arr);
		// die;

		$this->assign('out_put', $out_put);
		$this->display();
	}

	public function arr() {
		/*$a    = array('红色','绿色','蓝色');
		$b    = array('15码');
		$c    = array('男童','女童');
		$keys = array('color', 'size', 'sex');
		$arr  = array_merge_more($keys, $a, $b, $c);

		echo "<pre>";
		var_dump($arr);*/

		$arr = array('fdipzone', 'terry', 'alex');
		$arr1 = array(18, 19, 20);
		$arr2 = array('programmer', 'designer', 'tester');

		$keys = array('颜色','年龄','适用');

		foreach ($arr as $k => $v) {
			foreach ($arr1 as $k1 => $v1) {
				foreach ($arr2 as $k2 => $v2) {
					$aa[$k][$k1]['k'] = $v;
					$aa[$k][$k1]['k'] = $v;
				}
			}
		}
	}

	public function json () {
		$a = json_decode('[{"goods_id":"1","goods_number":15}, {"goods_id":"3","goods_number":18}]', true);

		echo "<pre>";
		var_dump($a);
	}


	public function trim1 () {
		$a = '    b bb   ';
		$b = trim($a, ' ');
		var_dump($b);
	}

	public function sqlsql () {
		$map['id']  = array('between',array('1000','9999'));

		echo "<pre>";
		var_dump($map);
	}

    public function ajax_login() {
        $account    = $_POST['account'] ? $_POST['account'] : '';
        $password   = $_POST['password'] ? $_POST['password'] : '';
        //$time = time();
        if( $account == '' || $password == ''){
            $this->ajaxReturn(array('res'=>0,'msg'=>'账号、密码、验证码不能为空！'));
        }else{
            //$info = M('Admin')->where(array('username'=>$account,'password'=>$password))->find();
            //if( !$info ){
            if( $account == 'admin' && $password == 1234){
                //$this->ajaxReturn(array('res'=>0,'msg'=>'账号或密码错误'));
                $this->ajaxReturn(1);
            }else{
                //确认登录信息：保存cookie/session
                //cookie('admin_id',$info['admin_id']);
                //session('admin_info',$info);

                //$this->ajaxReturn($info);
                $this->ajaxReturn(0);
            }
        }
	}

    public function ceil() {
        $a = floor(4.8);
        var_dump($a);
	}

	// 追加数组
    public function aaa() {
        $a[] = array(
            'a' => 1,
            'b' => 3,
        );
        $b = array('c'=>5, 'd'=>2);
        array_push($a, $b);
        echo "<pre>";
        var_dump($a);
	}

    public function identity111() {
        $idCard = $_POST['idCard'] ? $_POST['idCard'] : '';

        if (!$idCard) {
            $this->ajaxReturn(array('res'=>0, 'msg'=>'请输入姓名和身份证号'));
        }

        $vCity  = array('11', '12', '13', '14', '15', '21', '22', '23', '31', '32', '33', '34', '35', '36', '37', '41', '42', '43', '44', '45', '46', '50', '51', '52', '53', '54', '61', '62', '63', '64', '65', '71', '81', '82', '91');
        $verify = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
        if (!preg_match('/^([\d]{17}[xX\d]|[\d]{15})$/', $idCard)) {
            $this->ajaxReturn(array('res'=>0, 'msg'=>'身份证号码不正确，请重新输入'));
        }

        if (!in_array(substr($idCard, 0, 2), $vCity)) {
            $this->ajaxReturn(array('res'=>0, 'msg'=>'身份证号码不正确，请重新输入'));
        }

        // $idCard  = preg_replace('/[xX]$/i', 'a', $idCard);
        $vLength = strlen($idCard);

        if ($vLength == 18) {
            $vBirthday = substr($idCard, 6, 4) . '-' . substr($idCard, 10, 2) . '-' . substr($idCard, 12, 2);
        } else {
            $vBirthday = '19' . substr($idCard, 6, 2) . '-' . substr($idCard, 8, 2) . '-' . substr($idCard, 10, 2);
        }

        if (date('Y-m-d', strtotime($vBirthday)) != $vBirthday) {
            $this->ajaxReturn(array('res'=>0, 'msg'=>'身份证号码不正确，请重新输入'));
        }
        if ($vLength == 18) {
            $vSum = 0;

            for ($i = 17; $i > 0; $i--) {
                $vSubStr = substr($idCard, 17 - $i, 1);
                $vSum   += (pow(2, $i) % 11) * $vSubStr;
                // $vSum += (pow(2, $i) % 11) * (($vSubStr == 'a') ? 10 : intval($vSubStr, 11));
            }
            $remainder1 = substr($idCard,-1);
            $remainder = $vSum % 11;

            if ($remainder1 != $verify[$remainder]) {
                $this->ajaxReturn(array('res'=>0, 'msg'=>'身份证号码不正确，请重新输入'));
            }
        }
    }

    // 生成身份证号码
    public function identity() {
        // $idCard = '612401199211091200';
        // $idCard = '612240199012033511';
        // $idCard = '612240199112033527';
        // $idCard = '612401199211091235';
        $idCard = '113404198801131134';

        $vCity  = array('11', '12', '13', '14', '15', '21', '22', '23', '31', '32', '33', '34', '35', '36', '37', '41', '42', '43', '44', '45', '46', '50', '51', '52', '53', '54', '61', '62', '63', '64', '65', '71', '81', '82', '91');
        $verify = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
        if (!preg_match('/^([\d]{17}[xX\d]|[\d]{15})$/', $idCard)) {
            // $this->ajaxReturn(array('res'=>0, 'msg'=>'身份证号码不正确，请重新输入'));
            echo "<pre>";
            var_dump('身份证号码不正确，请重新输入1');
        }

        if (!in_array(substr($idCard, 0, 2), $vCity)) {
            // $this->ajaxReturn(array('res'=>0, 'msg'=>'身份证号码不正确，请重新输入'));
            echo "<pre>";
            var_dump('身份证号码不正确，请重新输入2');
        }

        // $idCard  = preg_replace('/[xX]$/i', 'a', $idCard);
        $vLength = strlen($idCard);

        if ($vLength == 18) {
            $vBirthday = substr($idCard, 6, 4) . '-' . substr($idCard, 10, 2) . '-' . substr($idCard, 12, 2);
        } else {
            $vBirthday = '19' . substr($idCard, 6, 2) . '-' . substr($idCard, 8, 2) . '-' . substr($idCard, 10, 2);
        }

        if (date('Y-m-d', strtotime($vBirthday)) != $vBirthday) {
            // $this->ajaxReturn(array('res'=>0, 'msg'=>'身份证号码不正确，请重新输入'));
            echo "<pre>";
            var_dump('身份证号码不正确，请重新输入3');
        }
        if ($vLength == 18) {
            $vSum = 0;

            for ($i = 17; $i > 0; $i--) {
                $vSubStr = substr($idCard, 17 - $i, 1);
                $vSum   += (pow(2, $i) % 11) * $vSubStr;
                // $vSum += (pow(2, $i) % 11) * (($vSubStr == 'a') ? 10 : intval($vSubStr, 11));
            }
            $remainder1 = substr($idCard,-1);
            $remainder = $vSum % 11;

            echo "<pre>";
            var_dump($remainder1);
            var_dump($remainder);
            var_dump($verify[$remainder]);

            if ($remainder1 != $verify[$remainder]) {
                // $this->ajaxReturn(array('res'=>0, 'msg'=>'身份证号码不正确，请重新输入'));
                echo "<pre>";
                var_dump('身份证号码不正确，请重新输入4');
            }
        }

    }

    // 身份证号码验证
    public function identityCheck() {
        $idCard = '612240199012033510';
        // $idCard = '612401199211091200';

        echo "<pre>";
        $a = preg_match('/^([\d]{17}[xX\d]|[\d]{15})$/', $idCard);
        var_dump($a);
        // if (!1) {
        //     echo "<pre>";
        //     var_dump('false');
        // }
        //
        // if (!preg_match('/^([\d]{17}[xX\d]|[\d]{15})$/', $idCard)) {
        //     echo "<pre>";
        //     var_dump('号码错误');
        // }
    }


    public function plzh() {

        $arr = array('a','b','c','d');
        $result = array();
        $t = $this->getCombinationToString($arr, 2);
        echo "<pre>";
        // var_dump();
        print_r($t);
    }
    public function getCombinationToString($arr, $m) {
        if ($m ==1) {
            return $arr;
        }
        $result = array();

        $tmpArr = $arr;
        unset($tmpArr[0]);
        for($i=0;$i<count($arr);$i++) {
            $s = $arr[$i];
            $ret = $this->getCombinationToString(array_values($tmpArr), ($m-1), $result);

            foreach($ret as $row) {
                $result[] = $s . $row;
            }
        }

        return $result;
    }

    public function time() {

        $this->display();
    }

    // 指定二维数组中某个值唯一
    function unique_multidim_array($array, $key) {
        $temp_array = array();
        $i = 0;
        $key_array = array();

        foreach($array as $val) {
            if (!in_array($val[$key], $key_array)) {
                $key_array[$i] = $val[$key];
                $temp_array[$i] = $val;
            }
            $i++;
        }
        return $temp_array;
    }

    public function code() {
        $info = M('Test')->where(array('id' => 1))->find();
        $a = base64_decode($info['v']);
        $b = json_decode(base64_decode($info['v']), true);


        echo "<pre>";
        // var_dump($info);
        // var_dump($a);
        var_dump($b);
        die;
    }

    // 是否为数字或数字字符串
    public function is_numeric () {
        $a = '12345.563463.543';
        $b = !is_numeric($a);

        echo "<pre>";
        var_dump($b);
        die;
    }

    public function cite() {
        $data = ['a', 'b', 'c'];
        foreach ($data as $k => $v) {
            $v = &$data[$k];
            echo "<pre>";
            var_dump($v);
            var_dump($data);
            die;
        }
        echo "<pre>";
        var_dump($data);
        die;
    }

    public function monthPlus() {
        $time = date('Y-m-d H:i:s', 1559706566);
        $time_day  = date('Y-m-d H:i:s', strtotime("+2 months +1 days", 1559706566));
        $time_day1 = date('Y-m-d H:i:s', mktime(23, 59, 59, date('m', 1559706566) + 2, date('d', 1559706566), date('Y', 1559706566)));

        echo "<pre>";
        var_dump($time);
        var_dump($time_day);
        var_dump($time_day1);
        die;
    }

    // 一维数组按值重新排序
    public function arrayKeys() {
        $arr   = array(17, 30, 87, 57, 23, 9, 45, 90, 65, 79);
        unset($arr[3]);
        $arr = array_values($arr);

        echo "<pre>";
        var_dump($arr);
        die;
    }

    // 一维数组冒泡排序（每次比较相邻的两个，然后选择是否交换位置）
    public function bubbleSort() {
        $arr   = array(17, 30, 87, 57, 23, 9, 45, 90, 65, 79);
        $count = count($arr);

        for ($i = 0; $i < $count; $i++) {
            for ($j = $i + 1; $j < $count; $j++) {
                if ($arr[$i] > $arr[$j]) {
                    $tem = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $tem;
                }
            }
        }
        echo "<pre>";
        var_dump($arr);
        die;
    }

    // 一维数组选择排序（假设第一个数最小，每次第一个数个剩下的依次比较，拿出最小的放在一个新的数组里）
    public function selectSortOne() {
        $arr   = array(17, 30, 87, 57, 23, 9, 45, 90, 65, 79);
        $count = count($arr);
        echo "<pre>";

        $arr1 = array();
        for ($i = 0; $i < $count; $i++) {
            $min = $arr[0];
            $k   = 0;
            for ($j = 1; $j < count($arr); $j++) {
                if ($min > $arr[$j]) {
                    $min = $arr[$j];
                    $k   = $j;
                }
            }
            array_push($arr1, $min);
            unset($arr[$k]);
            $arr = array_values($arr);
        }

        var_dump($arr1);
        die;
    }

    // 一维数组选择排序（假设第一个数最小，每次第一个数和剩下的依次比较找到最小的第一个交换位置）
    public function selectSortTwo() {
        $arr   = array(17, 30, 87, 57, 23, 9, 45, 90, 65, 79);
        $count = count($arr);
        echo "<pre>";

        for ($i = 0; $i < $count; $i++) {
            $min = $arr[$i];
            $k   = $i;
            for ($j = $i + 1; $j < $count; $j++) {
                if ($min > $arr[$j]) {
                    $min = $arr[$j];
                    $k   = $j;
                }
            }

            $tem     = $arr[$i];
            $arr[$i] = $min;
            $arr[$k] = $tem;
        }

        var_dump($arr);
        die;
    }

    


}

?>