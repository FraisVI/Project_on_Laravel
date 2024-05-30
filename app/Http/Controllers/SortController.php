<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SortController extends Controller
{
    public function sort()
    {
        $k = 0;
        $arr = [42, 32, 52, 82, 15,  3, 19, 62, 76, 41];
        $arr2 = [42, 32, 52, 82, 15,  3, 19, 62, 76, 41];
        rsort($arr2);
        for ($i = 0; $i < 9; $i++) {
            for ($j = 0; $j < 9; $j++){
                if ($arr[$j] > $arr[$j + 1]){
                   $k = $arr[$j];
                   $arr[$j] = $arr[$j + 1];
                   $arr[$j + 1] = $k;
                }
            }
        }
        return $arr2;

    }
}
