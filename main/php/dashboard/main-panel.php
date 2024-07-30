<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once 'sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <!-- <div id="content" style="background-color: #e7c6ff;"> -->
            <div id="content" style="background-color: #e7c6ff; background-image: url('<?php echo $image; ?>'); background-size: 40%; background-attachment: fixed; width: 100%; height: 100vh; overflow-x: hidden; overflow-y: scroll;">

                <!-- Topbar -->
                <?php include_once 'topbar.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row">

                        <!-- Page Heading 3 -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <label class="card p-2 pl-4 pr-4 rounded-pill" style="background-color: #7209b7; border: none;"><h1 class="h3 mb-0 text-light text-center fw-semibold">Dashboard</h1></label>
                        </div>

                        <div class="col-xl-8 col-lg-13">
                            <?php include_once 'display-comixs/display.php'; ?>
                        </div>

                        <div class="col-xl-4 col-lg-13">
                            <?php include_once 'display-comixs/search.php'; ?>
                        </div>

                        <!-- Box -->
                        <!-- Box -->

                    </div>

                    <!-- <div class="row">

                        <div class="col-lg-8 mb-4">
                            <?php include_once ''; ?>
                        </div>
  
                        <div class="col-xl-4 col-lg-5">
                            <?php include_once ''; ?>
                        </div>

                    </div> -->

                    <!-- Page Heading 5 -->
                    <div class="d-sm-flex align-items-center justify-content-between mt-4 mb-4">
                        <label class="card p-2 pl-4 pr-4 rounded-pill" style="background-color: #7209b7; border: none;"><h1 class="h3 mb-0 text-light text-center fw-semibold">About</h1></label>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->

                        <!-- Box 4 -->
                        <div class="col-lg-8 mb-4">
                            <?php include_once 'box4.php'; ?>
                        </div>
                        <!-- Box 4 -->

                        <!-- Box 5 -->
                        <div class="col-xl-4 col-lg-5">
                            <?php include_once 'box5.php'; ?>
                        </div>
                        <!-- Box 5 -->

                        <!-- Box 1 -->
                        <!-- <div class="col-xl-8 col-lg-7">
                            <?php //include_once 'box1.php'; 
                            ?>
                        </div> -->
                        <!-- Box 1 -->

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded-circle" id="btn-to-top" href="#" onclick="scrollToTop()">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div> -->

</body>

<!-- Bootstrap core JavaScript-->
<script src="../../vendor/all-js/jquery/jquery.min.js"></script>
<script src="../js/extra/bootstrap.bundle.min.js"></script>


<!-- Core plugin JavaScript-->
<script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/extra/sb-admin-2.min.js"></script>

</html>
