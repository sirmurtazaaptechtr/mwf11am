<?php
        session_start();

        unset($_SESSION); // unset the values held by session

        session_destroy();// ends the session

        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";

        
        
        ?>
        <a href="sessions.php">Sessions</a>