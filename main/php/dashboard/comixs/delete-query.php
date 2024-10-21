<?php
    require_once '../../config.php';

    if (isset($_POST['delCom'])) {
        $id = $_POST['id_comix'];

        $sqlDelete = "DELETE FROM tbl_comix WHERE id_comix = $id";
        if (!mysqli_query($connect, $sqlDelete)) {
            die("Delete failed: " . mysqli_error($connect));
        } else {
            header("Location: ../../dashboard.php?DELETED"); // Redirect after delete
        }
    }
?>
