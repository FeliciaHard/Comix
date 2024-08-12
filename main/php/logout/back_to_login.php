<?php

    function back_to_login($num_dir) {

        $file_name = 'login.php';

        /** 
         * Make it easier to use the array
         * -    It's starts with 1 instead of 0
         */ 

        $dir = (($num_dir + 2) - 1);

        /** 
         * List of different back directories
         */

        $bck_dir = array(
            /* 0 */    "./",
            /* 1 */    "../",
            /* 2 */    "../../",
            /* 3 */    "../../../",
            /* 4 */    "../../../../",
            /* 5 */    "../../../../../",
        );

        //  Redirect the choosen directory

            //  If the website is secure
        if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
            $uri = 'https://';
            $back_to_main = header("Location: https://comix.infinityfreeapp.com/Comic/main/login.php?not-allowed");
        }
        
            //  Or else the website is local
        else {
            $uri = 'http://';
        }

        //  To declare the variable = http://localhost
        $local = ($uri .= $_SERVER['HTTP_HOST']);

            //  If using xampp or other local web servers
        if ($local == 'http://localhost') {
            $back_to_main = header("Location: http://localhost/Comic/main/login.php?not-allowed");

            exit;
        }

            //  If using php web servers exstension
        elseif ($local == 'http://localhost:3000') {
            $back_to_main = header("Location: http://localhost/Comic/main/login.php?not-allowed");

            exit;
        }

            //  Other general local web servers
        else {
            //header('Location: main/index.php');

            exit;
        }
        
        //  Output assign the directory
        echo $back_to_main;

    }

?>