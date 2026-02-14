<?php
//? problem-04


$films =array("Fast", "Predestination", "Persuit", "Prestige");
$keyword ="avatar";

if (in_array($keyword, $films)) {
    echo "Yes";
}

else {
    echo "No";
}