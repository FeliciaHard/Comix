<?php 

    /** 
     *  Connects with js/to_main.js & js/dashboard.js
     *  Also connects with the css & bootstarp
     *  The variable determines the js files directory location
     */
    $num_of_dir = 1;
    $page_dir = "Login";
    
    require_once 'php/config.php';
    require_once 'php/imports.php';
    require_once 'php/import-cdn.php';
    require_once 'php/logout/logout.php'; 
    require_once 'php/images.php';

    session_start(); // Start session at the top!

    if (isset($_SESSION['temp'])) {
        $tempUsr = $_SESSION['temp'];

        if ($tempUsr == "Tmp_Usr") {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php conn_css_log($num_of_dir); ?>">
    <link rel="stylesheet" href="<?php conn_bootstrap($num_of_dir); ?>">
    <link rel="stylesheet" href="<?php conn_fontawesome_css($num_of_dir); ?>">
    <link rel="stylesheet" href="<?php conn_btm_nav_css($num_of_dir); ?>">
    <?php importCDN_css(); importCDN_font(); importCDN_headerICON(); ?>
    <link rel="shortcut icon" href="https://feliciahard.github.io/comix-src/images/A.ico" type="image/x-icon">
    <title><?php echo $page_dir.$title; ?></title>
</head>
<body onload="realtimeClockDateDay()" class="image-bckgrd">

    <div id="adjt-navbar" style="margin-bottom: 8%;">
        <?php //include_once 'php/header-log.php'; ?>
    </div>

    <center><p id="login-title" class="text-white fw-semibold" style="font-size: 100px;">COMIX</p></center>

    <div class="place1">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card mb-4 bg-dark border-dark" id="login_card">
                    <div class="card-header bg-secondary border-dark text-center text-light" id="login_card_head">
                        <b>Login Verification</b>
                    </div>
                    <div class="card-body">
                        <form action="php/log.php" method="post" class="needs-validation" novalidate>

                            <?php
                                /**
                                 * - If input is enter incorrectly
                                 * - Gets the "FAIL!" from log.php file
                                 */

                                 //  If their is any pop ups important or needed
                                 require_once 'php/pop-ups/pop-ups.php';
                            ?>

                            <div class="form-group form-floating mb-3">
                                <input type="text" name="user" class="form-control rounded-pill" id="floatingInput validationCustomUsername" placeholder="Username" required>
                                <label for="floatingInput validationCustomUsername">Username</label>
                                <div class="valid-feedback">Looks Good !</div>
                                <div class="invalid-feedback">Please insert your username !</div>
                            </div>

                            <div class="form-group mb-3" id="pass-field">
                                <div class="row">
                                    <div class="form-floating col">
                                        <input type="password" name="pass" class="form-control rounded-pill"  id="password" placeholder="Password" required>                              
                                        <label id="pass-label" for="floatingPassword validationCustom01">Password</label>
                                        <div class="valid-feedback">Looks Good !</div>
                                        <div class="invalid-feedback">Please insert your password !</div>
                                    </div>
                                    <div class="col-auto">
                                        <span onclick="password_show_hide()">
                                            <i class="fa-solid fa-eye-slash btn btn-secondary rounded-pill" id="show-eye"></i>
                                            <i class="fa-solid fa-eye d-none btn btn-secondary rounded-pill" id="hide-eye"></i>
                                        </span>                       
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="showPasswordCheckbox">
                                <label class="form-check-label" for="showPasswordCheckbox">
                                    Show password
                                </label>
                            </div> -->

                            <br>

                            <div class="d-grid mx-auto">
                                <button type="submit" name="login" class="btn btn-primary btn-block rounded-pill"><b>Enter</b></button>
                                <button type="reset" name="reset" class="btn btn-danger btn-block rounded-pill">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

    <!-- Connects links to js peak password -->
    <script src="js/security/log-pass-peak.js"></script>
    <script src="js/security/log-validation.js"></script>
    <?php importCDN_js();?>
</html>

<?php

        }
    } 
    
    else {
        header("Location: ../auth.php?NOT-ALLOWED");
    }

?>
