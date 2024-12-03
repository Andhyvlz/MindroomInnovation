<?php
    session_start();
    if(password_verify($_POST["password"], $_SESSION["password_level_1"])) {
        echo 'Level 1';
    }elseif(password_verify($_POST["password"], $_SESSION["password_level_2"])) {
        echo 'Level 2';
    }elseif(password_verify($_POST["password"], $_SESSION["password_level_3"])){
        echo 'Level 3';
    }
    echo '<hr><a href="../index.php">Return</a>'
?>