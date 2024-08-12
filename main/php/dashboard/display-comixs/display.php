<?php

    require_once 'config.php';

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

    $sqlDisplay = "SELECT * FROM tbl_comix $limit_clause";
    $result = mysqli_query($connect, $sqlDisplay);

    $row = mysqli_num_rows($result);

    $numid = ($current_page - 1) * $records_per_page + 1;

    $page_data = [];

    // Fetch all rows from the result set
    while ($row = mysqli_fetch_assoc($result)) {
        $page_data[] = $row;
    }
?>

<input type="number" class="d-none" value="<?php echo $num_of_dir; ?>" id="num_of_dir">

<!-- Area Chart -->
<div class="card shadow mb-4 overflow-hidden" style="background-color: #240046; border: none;" id="modal-form">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: #3c096c; border: solid #3c096c;" id="modal-form">
        <h6 class="m-0 font-weight-bold text-light">Current Comixs</h6>
        <div class="dropdown no-arrow">

            <!-- <button type="button" class="btn btn-secondary dropdown-toggle rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false">
                Filter
                <i class="fa-solid fa-angle-down fa-xs"></i>
            </button> -->

            <button type="button" class="btn btn-danger dropdown-toggle rounded-circle"  onclick="location.reload()">
                <i class="fa-solid fa-rotate"></i>
            </button>
    
        </div>
    </div>
    <!-- Card Body -->
    <div class="card-body overflow-x-auto overflow-y-hidden">

        <nav class="mt-1 mb-5" aria-label="Page navigation example">
            <div class="d-flex justify-content-center">

            <ul class="pagination d-flex justify-content-center">
                <?php
                    // Previous button
                    if ($current_page > 1) {
                        echo '<li class="page-item">
                                <a class="page-link rounded-start-pill" href="?page='.($current_page - 1).'" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>';
                    } elseif ($current_page >= 1) {
                        echo '<li class="page-item">
                                <span class="page-link rounded-start-pill" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </span>
                            </li>';
                    }

                    // Previous button
                    echo '<li class="page-item"><label class="page-link">'.$current_page.'</label></li>';

                    // Next button
                    echo '<li class="page-item">
                            <a class="page-link rounded-end-circle" href="?page='.($current_page + 1).'" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>';

                ?>
            </ul>

            </div>
        </nav>
        
        <div class="row row-cols-2 row-cols-md-6 g-4" style="max-height: 1000px; overflow-y: auto;">
            <?php foreach($page_data as $rowId) { ?>
                <div class="col" id="grid-adjt">
                    <div class="card border border-dark rounded-4">
                        <?php //echo '<a href="#" data-bs-toggle="modal" data-bs-target="#disCom'.$rowId["id_comix"].'">'; ?>
                        <a href="dashboard/display-comixs/page/page.php?idCom=<?= $rowId['id_comix']; ?>">
                        <img src="<?= $rowId['dis_comix']; ?>" class="card-img-top rounded-4" alt="...">
                        <div class="card-body d-none">
                            <h6 class="card-title text-center"><?= $rowId['name_comix']; ?></h5>
                            <!-- <p class="card-text"></p> -->
                        </div>
                        </a>
                    </div>
                        
                        <?php include_once 'load-once.php'; //  copy paste it to here ?>
                </div>
            <?php } ?>
        </div>
            

        <nav class="mt-5" aria-label="Page navigation example">
            <ul class="pagination d-flex justify-content-center">
                <?php
                    // Previous button
                    if ($current_page > 1) {
                        echo '<li class="page-item">
                                <a class="page-link rounded-start-pill" href="?page='.($current_page - 1).'" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>';
                    } elseif ($current_page >= 1) {
                        echo '<li class="page-item">
                                <span class="page-link rounded-start-pill" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </span>
                            </li>';
                    }

                    // Previous button
                    echo '<li class="page-item"><label class="page-link">'.$current_page.'</label></li>';

                    // Next button
                    echo '<li class="page-item">
                            <a class="page-link rounded-end-circle" href="?page='.($current_page + 1).'" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>';

                ?>
            </ul>
        </nav>

    </div>
</div>

<script src="../js/lightbox-plus-jquery.min.js"></script>
