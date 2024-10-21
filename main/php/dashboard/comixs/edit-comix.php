<?php
// Assume $connect is your database connection

// Fetch all records
$sqlShow = "SELECT id_comix, name_comix, tol_page, dis_comix, audio_path, id_page FROM tbl_comix";
$resultShow = mysqli_query($connect, $sqlShow);
if (!$resultShow) {
    die("Database query failed: " . mysqli_error($connect));
}

$comix_data = [];
while ($rowShow = mysqli_fetch_assoc($resultShow)) {
    $comix_data[] = $rowShow;
}
?>

<div class="modal fade" id="editCom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content" id="modal-form">
            <div class="modal-header bg-light">
                <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Edit Comix</h1>
                <button type="button" class="btn-close rounded-pill" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body" tabindex="0">
                <div>
                    <input type="text" id="search" class="form-control bg-light text-dark fw-semibold border-1 rounded-pill mb-3" placeholder="Search by Comix Name" oninput="filterComix()">
                </div>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center align-middle">ID</th>
                            <th scope="col" class="text-center align-middle">Comix's Name</th>
                            <th scope="col" class="text-center align-middle">No. Page</th>
                            <th scope="col" class="text-center align-middle">Cover</th>
                            <!-- <th scope="col" class="text-center align-middle">Audio</th> -->
                            <th scope="col" class="text-center align-middle">ID Page</th>
                            <th scope="col" class="text-center align-middle">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="comixResults">
                        <?php foreach ($comix_data as $rowShow) { ?>
                            <tr>
                                <th class="align-middle text-center"><?= $rowShow['id_comix']; ?></th>
                                <td class="align-middle"><?= htmlspecialchars($rowShow['name_comix']); ?></td>
                                <td class="align-middle text-center"><?= $rowShow['tol_page']; ?></td>
                                <td class="align-middle text-center">
                                    <img src="<?= htmlspecialchars($rowShow['dis_comix']); ?>" style="width: 100px; height: auto;">
                                </td>
                                <!-- <td class="align-middle text-center"><?php //htmlspecialchars($rowShow['audio_path']); ?></td> -->
                                <td class="align-middle text-center"><?= $rowShow['id_page']; ?></td>
                                <td class="align-middle text-center">
                                    <button class="btn btn-primary btn-block rounded" data-bs-toggle="modal" data-bs-target="#updateModal<?= $rowShow['id_comix']; ?>">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                    <button class="btn btn-danger btn-block rounded" data-bs-toggle="modal" data-bs-target="#delCom<?= $rowShow['id_comix']; ?>">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                
            </div>

            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>

<!-- Update Modals -->
<?php foreach ($comix_data as $rowShow) { ?>
    <form action="dashboard/comixs/update-query.php" method="post">
    <div class="modal fade" id="updateModal<?= $rowShow['id_comix']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
            <div class="modal-content" id="modal-form">
                <div class="modal-header bg-light">
                    <h1 class="modal-title fs-5 fw-semibold">Update Comix ID : <?= $rowShow['id_comix']; ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $rowShow['id_comix']; ?>">
                    <div class="mb-3">
                        <label for="uptName<?= $rowShow['id_comix']; ?>" class="form-label fw-semibold">Comix's Name</label>
                        <input type="text" class="form-control rounded-pill" name="uptName" id="uptName<?= $rowShow['id_comix']; ?>" value="<?= htmlspecialchars($rowShow['name_comix']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="uptTolpage<?= $rowShow['id_comix']; ?>" class="form-label fw-semibold">Comix's Total Pages</label>
                        <input type="number" class="form-control rounded-pill" name="uptTolpage" id="uptTolpage<?= $rowShow['id_comix']; ?>" value="<?= $rowShow['tol_page']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="uptTolpage<?= $rowShow['id_comix']; ?>" class="form-label fw-semibold">Comix's Cover</label>
                        <textarea class="form-control text-dark rounded" name="uptDis" rows="4" cols="50"><?= $rowShow['dis_comix']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="uptAudio<?= $rowShow['id_comix']; ?>" class="form-label fw-semibold">Comix's Audio</label>
                        <input type="text" class="form-control rounded-pill" name="uptAudio" id="uptAudio<?= $rowShow['id_comix']; ?>" value="<?= htmlspecialchars($rowShow['audio_path']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="uptIdpage<?= $rowShow['id_comix']; ?>" class="form-label fw-semibold">ID Page</label>
                        <input type="number" class="form-control rounded-pill" name="uptIdpage" id="uptIdpage<?= $rowShow['id_comix']; ?>" value="<?= $rowShow['id_page']; ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="update" class="btn btn-primary btn-block rounded-pill w-100">Update</button>
                    <button type="reset" name="reset" class="btn btn-danger btn-block rounded-pill w-100">Reset</button>
                    <a href="#" class="btn btn-secondary btn-block rounded-pill" data-bs-toggle="modal" data-bs-target="#editCom">
                        Go Back
                    </a>
                </div>
            </div>
        </div>
    </div>
    </form>

    <div class="modal fade" id="delCom<?= $rowShow['id_comix'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" id="modal-form">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Data Deletion</h1>
                    <button type="button" class="btn-close rounded-pill" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="dashboard/comixs/delete-query.php" method="post">
                    <div class="modal-body row g-3 p-4">
                        <input type="text" name="id_comix" class="d-none" value="<?= $rowShow['id_comix'] ?>" required>
                        <p class="text-dark text-center" style="text-wrap: balance;">
                            Are you sure you want to delete <strong>"<?= $rowShow['name_comix'] ?>"</strong> from the system ?
                        </p>
                    </div>

                    <div class="modal-footer">
                        <a href="#" class="btn btn-secondary btn-block rounded-pill" data-bs-target="#editCom" data-bs-toggle="modal">
                            Back
                        </a>
                        <button type="submit" name="delCom" class="btn btn-danger btn-block rounded-pill"><strong>Confirm Deletion</strong></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>


<script>
function filterComix() {
    const searchValue = document.getElementById('search').value.toLowerCase();
    const rows = document.querySelectorAll('#comixResults tr');

    rows.forEach(row => {
        const nameCell = row.querySelector('td:nth-child(2)').innerText.toLowerCase();
        row.style.display = nameCell.includes(searchValue) ? '' : 'none';
    });
}
</script>
