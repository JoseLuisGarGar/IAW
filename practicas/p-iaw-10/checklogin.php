<?php
        session_start();
    ?>
<html>
    <head>
        <title>Check</title>
        <style>
            body {
                line-height:25px;
            }
        </style>
    </head>
    <body>
        <?php
        $errores=[];
        $user= "Joseluis";
        $pass= "1234";
            if ((($_POST['user']) != "") && ($_POST['pass']) != "")
            {
                if (($_POST['user']) == $user && ($_POST['pass']) == $pass ) {
                    $_SESSION['user']=$_POST['user'];
                    $_SESSION['pass']=$_POST['pass'];
                    $_SESSION['status']=$_POST['status'];
                    echo "<h2>Logged in</h2>";
                    echo "<a href='logout.php'>Log out</a>";
                } else {
                    $errores[]=" Insert a valid username/password.";
                    echo "<a href='login.php'>Back to Login</a>";
                }
            }  else {
                if ($_POST['user'] == ""){
                     $errores[]="Insert a username.";
                } 
                if ($_POST['pass'] == "") {
                    $errores[]=" Insert a password.";
                }               
            }
        if (count($errores) > 0) {
            echo "<h1>Errors</h1><ul>";
            foreach ($errores as $key => $value) {
                echo "<li>".$value."</li>";
            }
            echo "</ul>";
        }
        ?>
        </li>
    </body>
</html>