<?php
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
