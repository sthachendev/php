<?php
//starts session
if (session_start())
    echo "session started<br>";
?>
<html>
<body>
    <?php
    //overwrite a session variable
    $_SESSION["name"] = "session1";
    echo 'session variable: '.$_SESSION["name"];

    echo '<br>session id: '.session_id();

    //remove all session variables
    session_unset();

    //end the session
   if ( session_destroy())
    echo "<br>session destroyed";
    ?>
</body>
</html>