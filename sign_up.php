<?php 

include 'functions.php';
include 'conn.php';

?>



<!Doctype html>
<html>
    <head>
        <link href="w3.css" rel="stylesheet" />
        <link href="John.css" rel="stylesheet" />
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    </head>
    <body class="w3-dark-grey">
        <header class="w3-blue">&nbsp;</header>
        <div class="j-scontainer">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="w3-card-2 w3-white w3-round" id="">
                <div class="w3-center w3-teal w3-round w3-padding-32">
                    <span class="w3-text-white w3-xxlarge">Jonathan!</span>
                    <span class="w3-small">Ghana</span>
                </div>
                <div class="j-f-inp">
                    <div class="w3-margin-top">
                    <div class="">
                    <input type="text" name="username" placeholder="Username" class="w3-input w3-border w3-round">
                    </div>
                </div>
                    <div class="w3-padding-16">
                    <div class="">
                    <input type="email" name="email" placeholder="you@email.com" class="w3-input w3-border w3-round">
                    </div>
                </div>
                    <div>
                    <div class="">
                    <input type="password" name="pass" placeholder="Password [4-6 letters]" class="w3-input w3-border w3-round">
                    </div>
                </div>
                    <div class="w3-padding-8">
                    <div class="w3-center">
                        <input type="submit" name="signup" value="Get me Started" class="w3-btn w3-teal" style="width:50%;" />
                    </div>
                </div>
                </div>
            </div>
            </form>
            <?php 
            
            if(isset($_POST['signup']) && $_SERVER['REQUEST_METHOD'] == "post") {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                
                $sql = "insert into user (id, username, email, pass, date) values (null, '$username', '$email', '$pass', CURRENT_TIMESTAMP)";
                
                if($reg_user = $conn->query($sql)) {
                    
                }
            }
            
            ?>
            
        </div>
    </body>
</html>