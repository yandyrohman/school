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

function pages_banner() {
    $ci = get_instance();
    $faces = $ci->db->get('face')->result();
    if (count($faces) != 0) {
        return base_url('img/face/'.$faces[0]->photo);
    } else {
        return base_url('img/face/default.png');
    }
}

function school_name() {
    $ci = get_instance();
    $profile = $ci->db->get('profile')->result();
    if (count($profile) != 0) {
        return $profile[0]->name;
    } else {
        return 'UNKNOWN';
    }
}