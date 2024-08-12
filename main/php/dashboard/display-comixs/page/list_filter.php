<?php

include_once '../../../config.php';

// Initialize variables
$filter1 = isset($_POST['input_filter1']) ? $_POST['input_filter1'] : '';

// Set the number of records per page
$records_per_page = 24; // You can change this value as needed

// Determine the current page
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $current_page = $_GET['page'];
} else {
    $current_page = 1;
}

// Calculate the limit clause for the SQL query
$offset = ($current_page - 1) * $records_per_page;
$limit_clause = "LIMIT $offset, $records_per_page";

if ($filter1 === "") {
    // Display default view
    $sql_default = "SELECT * FROM tbl_comix $limit_clause";
    $result_default = mysqli_query($connect, $sql_default);

    if ($result_default) {
        if (mysqli_num_rows($result_default) > 0) {
            while ($row_default = mysqli_fetch_assoc($result_default)) {
                $output = '';
                    
                echo $output;
            }
        } else {
            echo '<h5 class="text-danger text-center mt-3">No Data Found</h5>';
        }
    } else {
        echo '<h5 class="text-danger text-center mt-3">Error: '. mysqli_error($connect) .'</h5>';
    }
} else {
    // Handle pagination or default view
    if ($filter1 === "") {
        // Display default view with pagination
        $sql_default = "SELECT * FROM tbl_comix";
        $result_default = mysqli_query($connect, $sql_default);

        if ($result_default) {
            if (mysqli_num_rows($result_default) > 0) {
                while ($row_default = mysqli_fetch_assoc($result_default)) {
                    $output = '';

                    echo $output;
                }
            } else {
                echo '<h5 class="text-danger text-center mt-3">No Data Found</h5>';
            }
        } else {
            echo '<h5 class="text-danger text-center mt-3">Error: '. mysqli_error($connect) .'</h5>';
        }
    } else {
        // Handle filter logic with pagination
        $sql_filter = "SELECT * FROM tbl_comix WHERE name_comix LIKE ?";
        $stmt = mysqli_prepare($connect, $sql_filter);

        if ($stmt) {
            $filter1 = '%'. mysqli_real_escape_string($connect, $filter1) . '%';
            mysqli_stmt_bind_param($stmt, "s", $filter1);
            mysqli_stmt_execute($stmt);
            $result_filter = mysqli_stmt_get_result($stmt);

            if ($result_filter) {
                if (mysqli_num_rows($result_filter) > 0) {
                    while ($row_filter = mysqli_fetch_assoc($result_filter)) {
                        $output = '
                            <div class="col" id="grid-adjt">
                                <div class="card border border-dark rounded-4">
                                    <a href="../../../dashboard/display-comixs/page/page.php?idCom='.$row_filter['id_comix'].'">
                                    <img src="'.$row_filter['dis_comix'].'" class="card-img-top rounded-4" alt="...">
                                    <div class="card-body d-none">
                                        <h6 class="card-title text-center" id="name-comix">'.$row_filter['name_comix'].'</h6>
                                        <!-- <p class="card-text"></p> -->
                                    </div>
                                    </a>
                                </div>
                            </div>
                        ';
                        echo $output;
                    }
                } else {
                    echo '<h5 class="text-danger text-center mt-3">No Data Found</h5>';
                }
            } else {
                echo '<h5 class="text-danger text-center mt-3">Error: '. mysqli_error($connect) .'</h5>';
            }
        } else {
            echo '<h5 class="text-danger text-center mt-3">Error in preparing SQL statement</h5>';
        }
    }
}

?>
