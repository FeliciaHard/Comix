<?php
session_start(); // Start session at the top!

if (isset($_SESSION['temp'])) {
    $tempUsr = $_SESSION['temp'];

    if ($tempUsr == "Tmp_Usr") {
        // Session is already started
        echo "Session is already established.";

        // Check if the website is secure (HTTPS)
        $uri = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https://' : 'http://';
        $local = $uri . $_SERVER['HTTP_HOST'];

        // Redirect logic based on local environment
        if ($local == 'http://localhost' || $local == 'http://localhost:3000') {
            header('Location: login.php');
            exit();
        } else {
            header('Location: login.php');
            exit();
        }

    }
} else {
    // Session has not been started, handle the error
    echo "Session was not started. Now it's started.";
    header('Location: ../auth.php?DID-NOT-WORK');
    exit();
}
?>
