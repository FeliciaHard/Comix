<?php

    require_once '../../config.php';

    if (isset($_POST['add'])) {

        // Retrieve and sanitize input
        $id_comix = $_POST['id_comix'];
        $name_comix = $connect->real_escape_string($_POST['name_comix']);
        $tol_page = $_POST['tol_page'];
        $dis_comix = $connect->real_escape_string($_POST['dis_comix']);
        $audio_path = $connect->real_escape_string($_POST['audio_path']);
        $id_page = $id_comix;
        
        // Insert query
        $sql = "INSERT INTO tbl_comix (id_comix, name_comix, tol_page, dis_comix, audio_path, id_page) VALUES (?, ?, ?, ?, ?, ?)";
        
        // Prepare the statement
        if ($stmt = $connect->prepare($sql)) {
            $stmt->bind_param("isissi", $id_comix, $name_comix, $tol_page, $dis_comix, $audio_path, $id_page);
            
            // Execute the statement
            if ($stmt->execute()) {
                header("Location: ../../dashboard.php?SUCCESS");
            } else {
                echo "<script>alert('Error: " . $stmt->error . "');</script>";
            }

            // Close the statement
            $stmt->close();

        }
    }    
?>