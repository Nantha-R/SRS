<?php
    session_start();
    $userData=$_SESSION['userData'];
    echo $userData['link'];

?>