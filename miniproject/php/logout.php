<?php
    session_start();
    Session_destroy();
    header("Location: ../index.php");
?>    