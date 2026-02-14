<?php
//? problem-05

function RouteBubble($arr) {
    $n =count($arr);

    for ($i =0; $i < $n; $i++) {
        for ($j =0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp =$arr[$j];
                $arr[$j]=$arr[$j +1];
                $arr[$j +1]=$temp;
            }
        }
    }

    return $arr;
}

print_r(RouteBubble([5, 3, 8, 1, 2]));