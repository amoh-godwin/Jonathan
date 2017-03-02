<?php

include('conn.php');

include('function.php');

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
        <link href="../css/John.css" rel="stylesheet" />
        <link href="../css/w3.css" rel="stylesheet" />
        <script>
            function showStatus(str) {
                if(str.length == 0) {
                    document.getElementById("status").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            xmlhttp.responseText;
                        }
                    };
                    xmlhttp.open("GET", "getStatus.php?q="+str, true);
                    xmlhttp.send();
                }
            }
        </script>
    </head>
    <body>


          <form action="form.php?snd=<?php echo $snd; ?>&&recpt=<?php echo $recpt; ?>" method="post">
              <textarea type="text" class="" name="message" onkeyup="showStatus(this.value)"></textarea>
                   <input type="submit" name="submit" value="send" class="w3-btn w3-blue">
                <?php
                
                if(isset($_POST['submit'])) {
                    $msge = $_POST['message'];
                    $snd_dbsql = "insert into $snd_db (id, snd, msg, recpt, date) values (null, '$snd', '$msge', '$recpt', CURRENT_TIMESTAMP)";
                    $recpt_dbsql = "insert into $recpt_db (id, snd, msg, recpt, date) values (null, '$snd', '$msge', '$recpt', CURRENT_TIMESTAMP)";
                    
                    // inserting into sender's table
                    
                    if($snd_dbInsert = $conn->query($snd_dbsql)) {
                        echo "<audio><source autoplay='true'/></audio>";
                        
                    } else {
                        echo "God is in Control " .$conn->error;
                    }
                    
                    // inserting into reciepient's table
                    
                    if($recpt_dbInsert = $conn->query($recpt_dbsql)) {
                            echo "<embed loop='false' src='delivered.wav' hidden='true' autoplay='true'>";
                           // redirect_to("index.php?snd=$snd&&recpt=$recpt");
                        } else {
                            "God will help me: ".$conn->error;
                        }
                    
                }
                ?>
            </form>
    </body>
</html>