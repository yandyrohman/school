<?php

function limit_string($string, $limit) {
    $len = strlen($string);
    if ($len > $limit) {
        return substr($string, 0, $limit).'...';
    } else {
        return $string;
    }
}