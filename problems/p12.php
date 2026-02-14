<?php
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