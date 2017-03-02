<?php
function redirect_to($new_lotion) {
    header('Location: '. $new_lotion);
}

function smartTime($time) {
    return date("d-m", $time);
}

function smartDate2($date) {
    $s= strtotime($date);
    return date("h:i:a", $s);
}

function getBrowser() {
    $browserArray = array(
        'Windows Mobile' => 'IEMobile',
        'Android Phone' => 'Android',
        'IPhone Mobile' => 'iPhone',
        'Mozilla Firefox' => 'Firefox',
        'Google Chrome' => 'Chrome',
        'Internet Explorer' => 'MSIE',
        'Opera Browser' => 'Opera',
        'Safari' => 'Safari'
    );

    return $browserArray;
}

function getOs() {
    $osArray = array(
        'Windows 7' => 'Windows NT 6.1'
    );

    return $osArray;
}

function getSession() {
    $sessionArray = array("username", "browser", "os", "country", "referer", "views", "edits", "deletes", "authors", "series", "hours");
    
    return $sessionArray;
}

function getSessDbname() {
    $sessionDbnameArray = array("username", "browser", "os", "country", "referer", "views", "edits", "deletes", "authors", "series", "duration");
    
    return $sessionDbnameArray;
}

function uploadImage($name, $image_name)
{
    $string = file_get_contents($_FILES[$name]['tmp_name']);
    $im = imagecreatefromstring($string);
    $new_image = "images/" . $image_name;
    imagejpeg($im, $new_image, 120);
    return $new_image;
}


?>