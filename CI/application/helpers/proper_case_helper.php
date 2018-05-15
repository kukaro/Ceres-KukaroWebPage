<?php
function to_proper_case($string)
{
    $arr = str_split($string);
    for ($i = 0; $i < sizeof($arr); $i++) {
        if ($i == 0) {
            $arr[$i] = strtoupper($arr[$i]);
            continue;
        }
        if ($arr[$i - 1] == '_') {
            $arr[$i] = strtoupper($arr[$i]);
        }
    }
    return implode('', $arr);
}