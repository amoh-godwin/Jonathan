<?php

include('conn.php');

include('functions.php');

if(isset($_GET['snd'])) {
    //$snd = $_GET['snd'];
    //$snd_db = $snd."_chat";
} else {
    //redirect_to('udesign.php');
}

if(isset($_GET['recpt'])) {
   // $recpt = $_GET['recpt'];
   // $recpt_db = $recpt."_chat";
    
}

//if(isset($_GET['q'])) {
   // $str = $_GET['q'];

?>

<!Doctype html>
<html>
    <head>
        <meta >
        <title>Jonathan</title>
        <link href="John.css" rel="stylesheet" />
        <link href="w3.css" rel="stylesheet" />
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" />
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
                <ul class="w3-navbar w3-blue">
                    <li><a><i class="fa fa-user-circle fa-lg w3-padding-small"></i><?php echo //$recpt; ?></a></li>
                    <li class="w3-right w3-text-white w3-hover-white"><a><i class="fa fa-info-circle w3-hover-text-blue"></i></a></li>
                </ul>
                <div>
                    <ul class="w3-navbar w3-blue">
                        <li><i class="fa fa-circle w3-text-green w3-padding-small"></i></li>
                        <li><?php echo //$str; ?></li>
                    </ul>
                </div>
            </div>
            
           
            <div id="chat_box" class="">
            </div>
                
            <iframe src="form.php?snd=<?php echo //$snd; ?>&&recpt=<?php echo //$recpt; ?>" style="border: none" width="100%">
            </iframe>
        </div>
    </body>
</html>