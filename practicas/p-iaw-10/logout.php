<?php
        session_start();
    ?>
<html>
    <head>
        <title>Logout</title>
        <style>
            body {
                line-height:25px;
            }
        </style>
    </head>
    <body>
        <?php
            session_destroy();
            echo "<h2 href='login.php'>Logged out successfully</h2>";
            echo "<a href='login.php'>Back to login</a>";
        ?>
    </body>
</html>