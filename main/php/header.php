<?php
    // IMPORTANT don't remove
    require_once 'imports.php';
    require_once 'images.php';

    $sql = "SELECT * 
            FROM tbl_user
            WHERE id = 1;
        ";

    $result = mysqli_query($connect, $sql);

    $row = mysqli_num_rows($result);

    $row = mysqli_fetch_assoc($result);
?>

<style>
    body, #nav-corner {
        background-color: #02010a;
    }

    .contain-nav {
        border-bottom: 3px solid #7209b7;
    }
</style>

<html>
<head></head>
<body>
<div class="contain-nav" id="nav-corner" style="z-index: 999999;">
    <nav class="navbar" id="nav-corner">
        <div class="container-fluid d-flex justify-content-center">
            <div>
                <h1 class="fw-bold text-light" onclick="dashboard(<?php echo $num_of_dir; ?>)">COMIX</h1>
            </div>
        </div>
    </nav>
</div>
</body>
    <!-- IMPORTANT don't remove -->

    <!-- Connects bootstrap to all files -->
    <script src="<?php //conn_bootstrap_js($num_of_dir) ?>"></script>
    <script src="<?php conn_jquery($num_of_dir); ?>"></script>
    <script src="<?php conn_popper_js($num_of_dir); ?>"></script>

    <?php importCDN_js() ?>
</html>
