<?php

include('conn.php');

include('functions.php');

if(isset($_GET['snd'])) {
    $snd = $_GET['snd'];
    $snd_db = $snd."_chat";
}

if(isset($_GET['recpt'])) {
    $recpt = $_GET['recpt'];
    $recpt_db = $recpt."_chat";
}



?>



<!Doctype html>
<html>
    <head>
        <meta >
        <title>Jonathan</title>
        <link href="John.css" rel="stylesheet" />
        <link href="w3.css" rel="stylesheet" />
        
    </head>
    <body onload="postRefresh();">
        <div class="w3-padding-16" id="chat_box">
            <p>hello</p>
        </div>
    </body>