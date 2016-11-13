<?php 

function smartDate($date) {
    $s= strtotime($date);
    return date("h:i:a", $s);
}

function redirect_to($new_location) {
    header("Location: ". $new_location);
}

?>