<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow rounded-bottom-5" style="background-color: #a06cd5;">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn-link d-md-none border-0" style="background-color: #a06cd5;">
        <i class="fa-solid fa-compass fa-lg text-light"></i>
    </button>

    <!-- Topbar Search -->
    <!-- <form
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small z-0" placeholder="Search for..." id="search"
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary z-0" id="btn-search" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form> -->

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-dark text-normal fw-semibold">
                    
                </span>
                <img class="img-profile rounded-circle"
                    src="<?= $row['profile']; ?>">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in rounded-4"
                aria-labelledby="userDropdown">
                <!-- <a class="dropdown-item" href="logout/logout.php?out">
                    <i class="fas fa-solid fa-arrow-right-from-bracket fa-sm fa-fw mr-2 text-dark"></i>
                    Log Out
                </a> -->
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <!-- <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                </a> -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php logout($num_of_dir_logout); ?>">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>

            <div></div>
        </li>

    </ul>
    
</nav>