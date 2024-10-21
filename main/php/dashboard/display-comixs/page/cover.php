<?php

    $idpage = $id;

    $sqlPage = "
        SELECT *
        FROM tbl_comix
        WHERE id_comix = '$id';
    ;";

    $resultPage = mysqli_query($connect, $sqlPage);

    $rowPage = mysqli_fetch_assoc($resultPage);

    $nameFolder = $rowPage['name_comix'];

    $page_data = [];

    // Fetch all rows from the result set
    while ($rowPage = mysqli_fetch_assoc($resultPage)) {
        $page_data[] = $rowPage;
    }

?>

<input type="number" class="d-none" value="<?php echo $num_of_dir; ?>" id="num_of_dir">

<!-- Area Chart -->
<div class="card shadow mb-4 overflow-hidden" style="background-color: #240046; border: none;" id="modal-form">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: #3c096c; border: solid #3c096c;" id="modal-form">
        <h6 class="m-0 font-weight-bold text-light">Comix Cover</h6>
        
        <div class="dropdown no-arrow">

            <!-- <button type="button" class="btn btn-secondary dropdown-toggle rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false">
                Filter
                <i class="fa-solid fa-angle-down fa-xs"></i>
            </button> -->

            <!-- <button type="button" class="btn btn-primary dropdown-toggle rounded-circle"  onclick="location.reload()">
                <i class="fa-solid fa-rotate"></i>
            </button> -->
    
        </div>
    </div>
    <!-- Card Body -->
    <div class="card-body overflow-x-auto overflow-y-hidden">

        <div class="row row-cols-2 row-cols-md-1 g-4" style="max-height: 1000px; overflow-y: auto;" id="image-cover">
            <div class="col">
                <div class="card border border-dark rounded-4">
                    <?php
                        $outCover = " ";
                        $coverPath = 'comix_content/'.$nameFolder.'/cover/cover.png';
                        if (!file_exists($coverPath)) {
                            $coverPath = 'comix_content/'.$nameFolder.'/cover/cover.jpg';

                            if (!file_exists($coverPath)) {
                                $coverPath = ' ';
                            }
                        }

                        if ($coverPath === 'comix_content/'.$nameFolder.'/cover/cover.png' || $coverPath === 'comix_content/'.$nameFolder.'/cover/cover.jpg') {
                            $outCover = '<img src="'.$coverPath.'" class="img-fluid card-img-top rounded-4" data-action="zoom">';
                        } else {
                            $outCover = $coverPath;
                        }

                        echo $outCover;
                    ?>
                    
                </div>
            </div>
        </div>

    </div>

</div>

<link rel="stylesheet" href="../../../../css/viewer.editor.css?v=<?php echo time();?>">

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const gallery = document.getElementById('image-cover');
        const viewer = new Viewer(gallery, {
            inline: false,
            button: true,
            navbar: false,
            title: true,
            toolbar: true,
        });
    });
</script>