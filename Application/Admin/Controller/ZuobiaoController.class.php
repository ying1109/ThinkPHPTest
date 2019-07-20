<?php
namespace Admin\Controller;
use Think\Controller;
header('Content-Type:text/html;Charset=utf-8');

class ZuobiaoController extends Controller{

    /**
     * 验证区域范围
     * @param array $coordArray 区域
     * @param array $point      验证点
     * @return bool
     */
    public function zuobiao() {
        $coordArray = [ //上海
             ["x" => 2, "y" => 4],
             ["x" => 5, "y" => 4],
             ["x" => 1, "y" => 2],
             ["x" => 8, "y" => 2],
        ];
        // $point = ["x"=>6,"y"=>5];

        // if(!is_array($coordArray)||!is_array($point)) return false;

        $arr = array();

        for ($m = 1; $m <= 10; $m++) {
            for ($n = 1; $n <= 10; $n++) {
                $point['x'] = $m;
                $point['y'] = $n;

                $maxY = $maxX = 0;
                $minY = $minX = 9999;
                foreach ($coordArray as $item){
                    if($item['y']>$maxX) $maxX = $item['y'];
                    if($item['y'] < $minX) $minX = $item['y'];
                    if($item['x']>$maxY) $maxY = $item['x'];
                    if($item['x'] < $minY) $minY = $item['x'];
                    $vertx[] = $item['y'];
                    $verty[] = $item['x'];
                }
                // echo "<pre>";
                // var_dump($minX);
                // var_dump($maxX);
                // var_dump($minY);
                // var_dump($maxY);
                // die;
                if ($point['y'] < $minX || $point['y'] > $maxX || $point['x'] < $minY || $point['x'] > $maxY) {
                    continue;
                }
                // echo "<pre>";
                // var_dump(111);
                // die;

                $c = false;
                $nvert=count($coordArray);
                $testx=$point['y'];
                $testy=$point['x'];

                for ($i = 0, $j = $nvert-1; $i < $nvert; $j = $i++) {
                    if ( ( ($verty[$i]>$testy) != ($verty[$j]>$testy) )
                         && ($testx < ($vertx[$j]-$vertx[$i]) * ($testy-$verty[$i]) / ($verty[$j]-$verty[$i]) + $vertx[$i]) )
                        $c = !$c;
                }
                if ($c) {
                	$arr[] = $point;
                }
            }
        }

        echo "<pre>";
        var_dump($arr);
        die;
        $this->display();
    }

    public function arr() {
        // $arr = array();
        // $arr1 = array();
        for ($i = 1; $i <= 5; $i++) {
        	for ($j = 1; $j <= 5; $j++) {
        	    $arr['i'] = $i;
        	    $arr['j'] = $j;
                $arr1[] = $arr;
                echo "<pre>";
                var_dump($arr);
                var_dump($arr1);
                die;
        	}
        }
        // echo "<pre>";
        // var_dump($arr1);
        // die;
    }

    public function test() {
        $coordArray = [ //上海
                        ["x" => 3, "y" => 7],
                        ["x" => 8, "y" => 7],
                        ["x" => 2, "y" => 4],
                        ["x" => 9, "y" => 4],
        ];
        $point = ["x"=>10,"y"=>6];
        // $point = ["x"=>6,"y"=>5];

        if(!is_array($coordArray)||!is_array($point)) return false;
        $maxY = $maxX = 0;
        $minY = $minX = 9999;
        foreach ($coordArray as $item){
            if($item['y']>$maxX) $maxX = $item['y'];
            if($item['y'] < $minX) $minX = $item['y'];
            if($item['x']>$maxY) $maxY = $item['x'];
            if($item['x'] < $minY) $minY = $item['x'];
            $vertx[] = $item['y'];
            $verty[] = $item['x'];
        }
        if ($point['y'] < $minX || $point['y'] > $maxX || $point['x'] < $minY || $point['x'] > $maxY) {
            return false;
        }

        $c = false;
        $nvert=count($coordArray);
        $testx=$point['y'];
        $testy=$point['x'];
        for ($i = 0, $j = $nvert-1; $i < $nvert; $j = $i++) {
            if ( ( ($verty[$i]>$testy) != ($verty[$j]>$testy) )
                 && ($testx < ($vertx[$j]-$vertx[$i]) * ($testy-$verty[$i]) / ($verty[$j]-$verty[$i]) + $vertx[$i]) )
                $c = !$c;
        }

        echo "<pre>";
        var_dump($c);
        die;
    }

    function isPointInPolygon(){
        $polygon = array(
            array(
                "lat" => 2,
                "lng" => 4
            ),
            array(
                "lat" => 5,
                "lng" => 4
            ),
            array(
                "lat" => 8,
                "lng" => 2
            ),
            array(
                "lat" => 1,
                "lng" => 2
            )
        );
        $lnglat = array(
            "lat" => 4,
            "lng" => 2
        );

        $count = count($polygon);
        $px = $lnglat['lng'];
        $py = $lnglat['lat'];

        $flag = FALSE;

        for ($i = 0, $j = $count - 1; $i < $count; $j = $i, $i++) {
            $sy = $polygon[$i]['lng'];
            $sx = $polygon[$i]['lat'];
            $ty = $polygon[$j]['lng'];
            $tx = $polygon[$j]['lat'];

            if ($px == $sx && $py == $sy || $px == $tx && $py == $ty)
                return TRUE;

            if ($sy < $py && $ty >= $py || $sy >= $py && $ty < $py) {
                $x = $sx + ($py - $sy) * ($tx - $sx) / ($ty - $sy);
                if ($x == $px)
                    return TRUE;
                if ($x > $px)
                    $flag = !$flag;
            }
        }
        // return $flag;
        echo "<pre>";
        var_dump($flag);
        die;
    }


}

$map = [ //上海
         ["x" => 3, "y" => 7],
         ["x" => 8, "y" => 7],
         ["x" => 2, "y" => 4],
         ["x" => 9, "y" => 4],
];
$array = ["x"=>6,"y"=>5];//进行验证的区域

?>