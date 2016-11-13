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
        <script>
            
            var query = window.location.search;
            
            
            function postRefresh() {
            var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        
                        document.getElementById("chat_box").innerHTML = xmlhttp.responseText;
                    }
                };
                
                xmlhttp.open("GET","chat.php"+query,true);
                xmlhttp.send();
            }
            
            
            
            setInterval(function() {postRefresh();}, 1000);
            
        </script> 
    </head>
    <body class="w3-light-grey" onload="postRefresh();">
        <div class="" id="container">
            <div>
                <ul class="w3-navbar w3-green">
                    <li><a><?php echo $recpt; ?></a>
                        <ul>
                            <li><i>active</i></li>
                            <li id="status">typing...</li>
                        </ul>
                    </li>
                    <li class="w3-right"><a><i></i>info.</a></li>
                </ul>
                
            </div>
            
           
            <div id="chat_box"></div>
                
            <iframe src="form.php?snd=<?php echo $snd; ?>&&recpt=<?php echo $recpt; ?>" style="border: none" width="100%">
            </iframe>
        </div>
    </body>
</html>