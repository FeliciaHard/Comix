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
        <!-- <h6 class="m-0 font-weight-bold text-light">Current Comixs</h6> -->
        
        <div class="dropdown no-arrow">

            <!-- <button type="button" class="btn btn-secondary dropdown-toggle rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false">
                Filter
                <i class="fa-solid fa-angle-down fa-xs"></i>
            </button> -->

            <!-- <button type="button" class="btn btn-primary dropdown-toggle rounded-circle"  onclick="location.reload()">
                <i class="fa-solid fa-rotate"></i>
            </button> -->
    
        </div>
        <h6 class="m-0 font-weight-bold text-light">Total Page : <?php echo $total; ?></h6>
    </div>
    <!-- Card Body -->
    <div class="card-body overflow-x-auto overflow-y-hidden">

        <?php if ($idpage == 41 || $idpage == 45) { ?>
        <nav class="mt-1 mb-5" aria-label="Page navigation example">
            <div class="w-100 d-flex justify-content-center">

            <?php 
            
                $sql_mp3 = "SELECT audio_path FROM tbl_comix WHERE id_comix = '$idpage';";
                $result_mp3 = mysqli_query($connect, $sql_mp3);
                $rowMp3 = mysqli_fetch_assoc($result_mp3);
                
            ?>
            <audio class="audio-player" style="width: 80%;" controls>
                <source id="audio-src" src="https://feliciahard.github.io/comix-src/audios/<?= $rowMp3['audio_path']; ?>" type="audio/mpeg">
				<!-- <source id="audio-src" src="audio/<?= $rowMp3['audio_path']; ?>" type="audio/mpeg"> -->
			</audio>
            <?php //} ?>

            </div>
        </nav>
        <?php } ?>

        <div class="row row-cols-2 row-cols-md-6 g-4" style="max-height: 1000px; overflow-y: auto;" id="image-gallery">
            <?php 
                include_once "comix_content/seeMe.php"; 
                $tempName = strval($nameFolder);
                appear('comix_content/'.$tempName);
            ?>
            <!-- <a href="" data-lightbox="mygallery"> -->
            <!-- <img src="" class="card-img-top rounded-4" alt="..."> -->
            <!-- <div class="card-body">
                <h6 class="card-title">Card title</h5>
                <p class="card-text"></p>
            </div> -->
            <!-- </a> -->
        </div>

    </div>
</div>

<link rel="stylesheet" href="../../../../css/viewer.editor.css?v=<?php echo time();?>">

<script src="../../../../js/viewer.run.js"></script>