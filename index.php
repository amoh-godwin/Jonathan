<?php

include('conn.php');

include('function.php');

if(isset($_GET['snd'])) {
    $snd = $_GET['snd'];
    $snd_db = $snd."_chat";
} else {
    redirect_to('sign_up.php');
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
        <link href="../css/John.css" rel="stylesheet" />
        <link href="../css/w3.css" rel="stylesheet" />
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

            function getStatus() {
                var xmlHttp = new XMLHttpRequest();
                var statusBar = document.getElementById('statusBar');

                xmlHttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        statusBar.innerHTML = this.responseText;
                    }
                }

                xmlHttp.open("GET","cookie_writer.php", true);
                xmlHttp.send();
            }

            setInterval(function(){getStatus();}, 80);
            
        </script> 
    </head>
    <body class="w3-light-grey" onLoad="postRefresh(),getStatus()">
        <div class="" id="container">
            <div>
                <ul class="w3-navbar w3-blue">
                    <li><a><i class="fa fa-user-circle fa-lg w3-padding-small"></i><?php echo $recpt; ?></a></li>
                    <li class="w3-right w3-text-white w3-hover-white"><a><i class="fa fa-info-circle w3-hover-text-blue"></i></a></li>
                </ul>
                <div>
                    <ul class="w3-navbar w3-blue">
                        <li><i class="fa fa-circle w3-text-green w3-padding-small"></i></li>
                        <li id="statusBar">
                        </li>
                    </ul>
                </div>
            </div>
            
           
            <div id="chat_box" class="">
            </div>

            <iframe src="form.php?snd=<?php echo $snd; ?>&&recpt=<?php echo $recpt; ?>" style="border: none" width="100%">
            </iframe>
        </div>
    </body>
</html>