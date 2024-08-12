<?php

function back_to_login($num_dir) {
    // Define the login file
    $file_name = 'login.php';

    // Calculate directory level
    $dir = $num_dir;

    // List of different back directories
    $bck_dir = array(
        "./",
        "../",
        "../../",
        "../../../",
        "../../../../",
        "../../../../../",
    );

    // Determine the protocol (HTTP/HTTPS)
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https://' : 'http://';

    // Construct the base URL
    $base_url = $protocol . $_SERVER['HTTP_HOST'];

    // Handle redirection based on environment
    if ($base_url === 'http://localhost') {
        header("Location: {$base_url}/Comic/main/login.php?not-allowed");
    } elseif ($base_url === 'http://localhost:3000') {
        header("Location: {$base_url}/Comic/main/login.php?not-allowed");
    } elseif ($protocol === 'https://') {
        header("Location: https://comix.infinityfreeapp.com/Comic/main/login.php?not-allowed");
    } else {
        // Handle other general local web servers or production environments
        // For example, redirect to a default or relative path
        header("Location: /main/index.php");
    }

    // Terminate the script after redirection
    exit;
}
?>
