<?php 
if(isset($_GET['q'])) {
    $str = $_GET['q'];
}


?>
<!Doctype html>
<html>
    <head>
    </head>
    <body>
        <p onload="showNew(this.value)"><?php echo $str; ?></p>
        <script>
            function showNew(words) {
                if(words.length == 0) {
                    
                } else {
                    var xml1http = new XMLHttpRequest();
                    xml1http.onreadystatechange = function() {
                        if(xml1http.readyState == 4 && xml1http.status === 200) {
                            document.getElementById("newone").innerHTML = xml1http.responseText;
                        }
                    };
                    xml1http.open("GET", "index.php?snd=amoh&&recpt=nana&&q="+words, true);
                    xml1http.send();
                }
            }
        </script>
    </body>
</html>