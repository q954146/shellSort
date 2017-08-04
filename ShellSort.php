<?php
/**
 * Created by PhpStorm.
 * User: zimo
 * Date: 2017/8/4
 * Time: 13:50
 */

/**
 * @param $array
 * @return mixed
 */
function shellSort(&$array){


    $d = count($array);

    //当d>1时，进行希尔排序
    do{
        $d = ceil($d/2);
        //从i=d开始扫描数组
        for ($i = $d;$i < count($array); $i++){
            $team = $array[$i];
            //对同一分组中的数进行插入排序
            for ($j = $i-$d;$j >= 0 && $array[$j] > $array[$j+$d]; $j -= $d){
                $array[$j+$d] = $array[$j];
            }
            $array[$j+$d] = $team;
        }
    }while($d > 1);

    return $array;
}

$array = [4,2,8,5,3,1,9,6,7];
print_r(shellSort($array));