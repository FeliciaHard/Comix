<div class="modal fade" id="disCom<?= $rowId['id_comix']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content" id="modal-form">
            <div class="modal-header z-1" style="background-color: #2f2a7b;">
                <h1 class="modal-title text-light fs-5 fw-semibold" id="exampleModalLabel"><?= $rowId['name_comix']; ?> (Total Pages <?= $rowId['tol_page']; ?>)</h1>
            </div>
            <div class="modal-body" style="background-color: #110f2e;" tabindex="0">
                <div class="row row-cols-1 row-cols-md-5 g-4" style="max-height: auto; overflow-y: auto;">
                        <?php 

                            $id = $rowId['id_comix'];
                        
                            $sqlPage = "
                                SELECT tbl_page.num_page, tbl_page.page, tbl_page.id_page
                                FROM tbl_page
                                INNER JOIN tbl_comix ON tbl_page.id_page = tbl_comix.id_page
                                WHERE tbl_comix.id_comix = '$id';
                            ;";
        
                            $resultPage = mysqli_query($connect, $sqlPage);
        
                            $rowPage = mysqli_num_rows($resultPage);
        
                            // Check if query executed successfully
                            if (!$resultPage) {
                                die('Error executing query: ' . mysqli_error($connect));
                            }

                            while ($rowPage = mysqli_fetch_assoc($resultPage)) { 
                        ?>
                    <div class="col">
                        <div class="card border border-dark rounded-4">
                            <a href="<?= $rowPage['page']; ?>" data-lightbox="mygallery">
                                <img src="<?= $rowPage['page']; ?>" class="card-img-top rounded-4"  alt="...">
                            </a>
                        </div>
                    </div>
                        <?php } ?>
                </div>
            </div>
            <div class="modal-footer" style="background-color: #2f2a7b;">
                <button class="btn btn-danger w-100 rounded-pill" data-bs-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>