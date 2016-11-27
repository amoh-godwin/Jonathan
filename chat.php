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
        <link href="John.css" rel="stylesheet" />
        <link href="w3.css" rel="stylesheet" />
    </head>
    <body>
        
                <?php 
                $sql = "select * from $snd_db where recpt='$recpt' or snd='$recpt' order by date";
                if($run = $conn->query($sql)) {
                    while($row = $run->fetch_array()) {
                        $sender = $row['snd'];
                        $msg = $row['msg'];
                        $reciever = $row['recpt'];
                        $time = smartDate($row['date']);
                        
                        if($reciever == $snd) {
                            echo "
                            <div class='w3-margin-bottom' style='width:100%;'>
                                <ul class='j-al-left j-ul>
                                    <li class=''>
                                        <a class='w3-white w3-border w3-padding-8 w3-padding-small w3-round'>
                                        <span class='w3-tiny'>$time</span> $msg
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            ";
                        } else {
                        
                        echo "
                        <div class='w3-margin-bottom' style='width:100%;'>
                    <ul class='j-al-right j-ul>
                        <li class=''>
                            <a class='w3-green w3-padding-8 w3-padding-small w3-round'>
                                $msg <span class='w3-tiny'>$time</span>
                            </a>
                        </li>
                    </ul>
                </div>
                        ";
                        }
                        
                    }
                } else {
                    echo "Thank you Heavenly Father" .$conn->error;
                }
                
                
                ?>
                
        
    </body>
</html>