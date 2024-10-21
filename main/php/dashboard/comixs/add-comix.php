<?php

    $sqlData = "
        SELECT id_comix
        FROM tbl_comix
        ORDER BY id_comix DESC LIMIT 1;
    ";

    $resultData = mysqli_query($connect, $sqlData);

    $rowData = mysqli_fetch_assoc($resultData);

?>

<form action="dashboard/comixs/add-query.php" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="newCom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
            <div class="modal-content" id="modal-form">
                <div class="modal-header bg-light z-1">
                    <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Add New Comix</h1>
                    <button type="button" class="btn-close rounded-pill" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body row g-3 p-4" tabindex="0">
                    <div class="col-md-12">
                        <label class="form-label fw-semibold">Current Comix's ID</label>
                        <input type="number" class="form-control text-dark rounded-pill" value="<?= $rowData['id_comix']; ?>" disabled>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label fw-semibold">Latest Comix's ID</label>
                        <input type="number" class="form-control text-dark rounded-pill" name="id_comix" placeholder="Fill..." required>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label fw-semibold">Comix's Name</label>
                        <input type="text" class="form-control text-dark rounded-pill" name="name_comix" placeholder="Fill..." required>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label fw-semibold">Comix's No. Page</label>
                        <input type="number" class="form-control text-dark rounded-pill" name="tol_page" placeholder="Fill..." required>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label fw-semibold">Comix's Display Image</label>
                        <textarea class="form-control text-dark rounded" name="dis_comix" placeholder="Fill..." rows="4" cols="50" required></textarea>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label fw-semibold">Comix's Audio Name</label>
                        <input type="number" class="form-control text-dark rounded-pill" name="audio_path" placeholder="Fill...">
                    </div>
                    <!-- <div class="col-9">
                        <label class="form-label">Session</label>
                        <select class="form-select rounded-pill" name="session">
                            <option id="block" value="">-- Select --</option>
                            <option value="BOTH">BOTH</option>
                        </select>
                    </div>
                    <div class="col-9">
                        <label class="form-label">Department</label>
                        <select class="form-select rounded-pill" name="department_code">
                            <option id="block" value="">-- Select --</option>
                            
                        </select>
                    </div>
                    <div class="col-9">
                        <label class="form-label">Program</label>
                        <select class="form-select rounded-pill" name="program_code">
                            <option id="block" value="">-- Select --</option>
 
                        </select>
                    </div> -->
                    <!-- <div class="col-md-12 ">
                        <label class="form-label">Upload Comix's Pages</label>
                        <ul class="text-dark mb-3" style="font-size: small; list-style-type: disc;">
                            <li><span class="text-danger">Make sure image is JPG, JPEG or PNG</span></li>
                        </ul>
                        <input type="file" class="form-control rounded-pill" name="file" id="inputGroupFile02" accept=".jpg, .jpeg, .png">
                    </div> -->
                </div>

                <div class="modal-footer">
                    <button type="submit" name="add" class="btn btn-success btn-block rounded-pill">Add</button>
                    <button type="reset" class="btn btn-danger btn-block rounded-pill">Reset</button>
                </div>
            </div>
        </div>
    </div>
</form>