<?php

    require_once '../../config.php';

    if (isset($_POST['update'])) {
        // Fetch the posted values
        $id = $_POST['id'];
        $name = $_POST['uptName'];
        $page = $_POST['uptTolpage'];
        $cover = $_POST['uptDis'];
        $audio = $_POST['uptAudio'];
        $idPage = $_POST['uptIdpage'];

        // Sanitize and prepare the SQL statement
        $sqlUpdate = "UPDATE tbl_comix SET 
            name_comix = ?, 
            tol_page = ?, 
            dis_comix = ?, 
            audio_path = ?, 
            id_page = ? 
            WHERE id_comix = ?";

        $stmt = mysqli_prepare($connect, $sqlUpdate);
        mysqli_stmt_bind_param($stmt, "sissii", $name, $page, $cover, $audio, $idPage, $id);

        if (mysqli_stmt_execute($stmt)) {
            header("Location: ../../dashboard.php?UPDATED"); // Redirect after update
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($connect);
        }

        mysqli_stmt_close($stmt);
    }

?>
