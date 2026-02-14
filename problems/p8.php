<?php
//? problem-08

function RouteRandomPass($n) {
    return substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $n);
}

echo RouteRandomPass(5);
