<?php

    include_once 'config.php';

    if (isset($_POST['login'])) {

        $user = $_POST['user'];
        $pass = $_POST['pass'];

        //  Prevent SQL Injections

        //  Remove slash from input
        $user = stripcslashes($user);
        $pass = stripcslashes($pass);

        //  Remove escape string from input
        $user = mysqli_real_escape_string($connect, $user);
        $pass = mysqli_real_escape_string($connect, $pass);

        $passInc = md5(md5($pass));

        if (!empty($_POST['user'] && $_POST['pass'])) {

            $sql = "SELECT name FROM tbl_user WHERE name = '$user' AND pass_inc = '$passInc';";

            $result = mysqli_query($connect, $sql);

            $total = mysqli_fetch_assoc($result);

            if ($total) {
                //  Encrypt username for GET method
                $encrypt_user = md5(md5($user));

                /**
                 *  If password is not change and remain as default
                 *  user will be redirect to update password page
                 */ 

                session_start();
                $_SESSION['user'] = $_POST['user'];

                header("Location: dashboard.php?welcome&key=".$encrypt_user);
                //header('Location: dashboard/display-comixs/page/page.php?idCom=1');     // DON'T REMOVE

                // if ($pass === 'INPUT PASSWORD') {
                //     session_start();
                //     $_SESSION['user'] = $_POST['user'];

                //     header("Location: dashboard.php?welcome&key=".$encrypt_user);
                // } else {
                //     header("Location: ../login.php?FAIL!");
                // }

                exit();
            }

            elseif (!($total)) {
                header("Location: ../login.php?FAIL!");
                        echo $passInc;
            }

            else {
                header("Location: 404.php?Something-Wrong!");
            }
            
        }

        //  If input and password is empty 
        elseif (empty($_POST['user'] && $_POST['pass'])) {
            header("Location: ../login.php?NOT-COMPLETED");
        }

    }
