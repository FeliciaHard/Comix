<?php
session_start();

$num_of_dir = 0;
$page_dir = "Validate";

require_once 'main/php/config.php';
require_once 'main/php/import-cdn.php';

// Check if the form is submitted
if (isset($_POST['login'])) {
    // Sanitize and fetch the password input from the form
    $pass = $_POST['pass'];

    // Prevent SQL Injections
    $pass = stripcslashes($pass); // Remove slashes
    $pass = mysqli_real_escape_string($connect, $pass); // Escape string

    $passInc = md5(md5($pass));

    if (!empty($_POST['pass'])) {
        $sql = "SELECT pass_inc FROM tbl_user WHERE name = 'admin';";
        $result = mysqli_query($connect, $sql);
        $total = mysqli_fetch_assoc($result);

        if ($total && $total['pass_inc'] == $passInc) {
            // If password is valid, set session and redirect
            $_SESSION['temp'] = "Tmp_Usr";
            header("Location: main/index.php?status=validated");  
            exit();
        } else {
            // If login fails
            header("Location: auth.php?FAIL!");
            exit();
        }
    } elseif (empty($_POST['pass'])) {
        // If password is empty
        header("Location: auth.php?NOT-COMPLETED");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main/css/style-log.css">
    <?php importCDN_css(); importCDN_font(); importCDN_headerICON(); ?>
    <style>
        body {
            overflow: hidden; /* Hide scrollbars */
        }
    </style>
    <title>Validate</title>
</head>
<body>

    <div class="place1">
        <div class="row justify-content-center" style="margin-top: 15%;">
            <div class="col-md-4">
                <div class="card mb-4 bg-dark border-dark" id="login_card">
                    <!-- Card body for login -->
                    <div class="card-body">
                        <form action="" method="post" class="needs-validation" style="margin-top: 10px;" novalidate>

                            <div class="form-group mb-3" id="pass-field">
                                <div class="row">
                                    <div class="form-floating col">
                                        <input type="password" name="pass" class="form-control rounded-pill"  id="password" placeholder="Password" required>                              
                                        <label id="pass-label" for="floatingPassword validationCustom01">Password</label>
                                        <div class="valid-feedback">Looks Good !</div>
                                        <div class="invalid-feedback">Please insert your password !</div>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" name="login" class="btn btn-success rounded-pill" style="width: 55px; height: 55px;">
                                            <i class="fa-solid fa-arrow-right fa-xl"></i>
                                        </button>                    
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <?php importCDN_js();?>

</body>
</html>
