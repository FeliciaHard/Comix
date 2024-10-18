<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active mt-3">
        <a class="nav-link" onclick="dashboard(<?php echo $num_of_dir; ?>)">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-white">
        Activities
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSendlink" aria-expanded="true" aria-controls="collapseSendlink">
            <i class="fa-solid fa-paper-plane"></i>
            <span>Advanced</span>
        </a>
        <div id="collapseSendlink" class="collapse" aria-labelledby="headingSendlink" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded-4">
                <a class="collapse-item" href="#" data-bs-toggle="modal" data-bs-target="#newCom" aria-expanded="false">
                    Add Comix
                </a>
            </div>
        </div>

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSrclink" aria-expanded="true" aria-controls="collapseSrclink">
            <i class="fa-solid fa-link"></i>
            <span>Source Links</span>
        </a>
        <div id="collapseSrclink" class="collapse" aria-labelledby="headingSrclink" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded-4">
                <a class="collapse-item" href="https://drive.google.com/drive/folders/1TgMkfgF5Mxg5Hk2Sj17b2qFPWdCjbPru" target="_blank" aria-expanded="false">
                    TS-GD
                </a>
                <a class="collapse-item" href="https://gedecomix.com/comics-artist/tracy-scops/" target="_blank" aria-expanded="false">
                    GedeComix
                </a>
            </div>
        </div>

        <!-- <a class="nav-link collapsed" href="#status">
            <i class="fa-solid fa-square-poll-vertical"></i>
            <span>Status</span>
        </a> -->

        <div>
            <?php include_once 'comixs/add-comix.php' ?>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="text-center d-none d-md-inline">
        <style>
            #github:hover {
                color: white;
                cursor: pointer;
            }
        </style>
        <a href="https://github.com/FeliciaHard/Comix" target="_blank" style="color: inherit;">
            <i class="fa-brands fa-2xl fa-github" id="github"></i>
        </a>
    </div>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline mt-5">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message 
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div>
    -->
</ul>