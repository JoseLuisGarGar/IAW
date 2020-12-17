<html>
    <head>
        <title>Login</title>
        <style>
            body {
                line-height:25px;
            }
        </style>
    </head>
    <body>
        <?php
        session_start();
        if (isset(($_SESSION['status']))){
            echo "Logged as : ".$_SESSION['user']." (".$_SESSION['status'].")<br>";
            echo "<a href='logout.php'>Log out</a><br>";
        } else {
            echo "<form action='checklogin.php' method='POST' enctype='multipart/form-data'>";
            echo "Username: <input type='text' name='user'><br>";
            echo "Password: <input type='password' name='pass'><br>";
            echo "<a>Status :</a>";
            echo "<select name='status'>
            <option value='student'>Student</option>
            <option value='teacher'>Teacher</option>
              </select><br>";
              echo "<input type='submit' value='Log in' name='login'><br>";
        }
        
        echo "</form>";
 
        ?>
    </body>
</html>