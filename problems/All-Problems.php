<?php //? Problem-01

$age=20;

if ($age > 18) {
    echo "Accepted";
}

else {
    echo "NOT Accepted";
}


//? Problem-02

function my_fun($x , $y) {
    echo "x + y = " . $x +$y . "<br>";
    echo "x - y = " . $x - $y . "<br>";
    echo "x * y = " . $x * $y . "<br>";
    echo "x / y = " . $x / $y . "<br>";
}

my_fun(10, 5);

//? problem-03

function sumArray($arr) {
    return array_sum($arr);
}

$nums =[1,
2,
3,
4,
5];
echo sumArray($nums);


//? problem-04


$films =array("Fast", "Predestination", "Persuit", "Prestige");
$keyword ="avatar";

if (in_array($keyword, $films)) {
    echo "Yes";
}

else {
    echo "No";
}

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

//? problem-06

$tests=array(5, 4, 9, 3, 1, 7, 5, 8, 6);
echo max($tests);

//? problem-07

$films=array("avatar", "Prestige", "avatar", "Prestige");
$keyword="avatar";
$count =0;

foreach ($films as $film) {
    if ($film ==$keyword) {
        $count++;
    }
}

echo $count;

//? problem-08

function RouteRandomPass($n) {
    return substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $n);
}

echo RouteRandomPass(5);


//? problem-09

//* With foreach
$tests =array(1, "tariq", 1.5, true, 7, 's', false);

foreach ($tests as $item) {
    if (is_bool($item)) {
        echo ($item ? "Yes" : "No") . "<br>";
    }
}


//* With While

$tests =array(1, "tariq", 1.5, true, 7, 's', false);

$i =0;
$count =count($tests);

while ($i < $count) {
    if (is_bool($tests[$i])) {
        echo ($tests[$i] ? "Yes" : "No") . "<br>";
    }

    $i++;
}


//? problem-10

$tests =array(6, 4, 9, 3, 12, 8, 7);
sort($tests);
print_r($tests);

//? problem-11

$arr1 =array('a', 'b', 'c', 'd');
$arr2 =array('c', 'd', 'e', 'f');

$result =array_intersect($arr1, $arr2);
echo implode(" - ", $result);

//? problem-12

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $price =$_POST['price'];
    $qty =$_POST['qty'];

    if ( !is_numeric($price) || !is_numeric($qty) || $price < 0 || $qty < 0) {
        echo "<div class='error'>Please enter valid numeric values only</div>";
        exit;
    }

    $total =$price * $qty;

    if ($total < 1000) {
        $discount =0.10;
    }

    else {
        $discount =0.15;
    }

    $finalPrice =$total - ($total * $discount);

    echo "<div class='result'>";
    echo "Total Before Discount: <b>$total</b><br>";
    echo "Total After Discount: <b>$finalPrice</b>";
    echo "</div>";
}