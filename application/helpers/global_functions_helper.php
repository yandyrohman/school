<?php

function limit_string($string, $limit) {
    $len = strlen($string);
    if ($len > $limit) {
        return substr($string, 0, $limit).'...';
    } else {
        return $string;
    }
}

function staff_position($char) {
    if ($char == 'a') {
        return 'Kepala Sekolah';
    } else if ($char == 'b') {
        return 'Wakil Kepala Sekolah';
    } else if ($char == 'c') {
        return 'Kepala Jurusan';
    } else if ($char == 'd') {
        return 'Guru';
    } else if ($char == 'e') {
        return 'Staff TU';
    } else if ($char == 'f') {
        return 'Satpam';
    } else {
        return '-';
    }
}