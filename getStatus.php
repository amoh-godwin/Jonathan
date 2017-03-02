<?php 
if(isset($_GET['q'])) {
    $str = $_GET['q'];
    setcookie('status', $str, time() + (86400 * 10), '/');
}


