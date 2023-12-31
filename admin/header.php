<?php 
    try {
        if(isset($_SESSION['admin_login'])) {
?>

<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <img src="img/favicon.png" alt="CCET" height="50px" width="50px">
        <div class="sidebar-brand-text mx-3">CCET Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="admin.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseaids"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-robot"></i>
            <span>B.TECH AI&DS</span>
        </a>
        <div id="collapseaids" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">EVENTS</h6>
                <a class="collapse-item" href="event_details.php?parameter=aids,Paper Presentation">Paper Presentation</a>
                <a class="collapse-item" href="event_details.php?parameter=aids,AI Quiz">AI Quiz</a>
                <a class="collapse-item" href="event_details.php?parameter=aids,Bug Finder">Bug Finder</a>
                <a class="collapse-item" href="event_details.php?parameter=aids,E-Sports">E-sports</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecse"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-laptop"></i>
            <span>B.E CSE</span>
        </a>
        <div id="collapsecse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">EVENTS</h6>
                <a class="collapse-item" href="event_details.php?parameter=cse,Paper Presentation">Paperio</a>
                <a class="collapse-item" href="event_details.php?parameter=cse,Techcrack">Tech Crack</a>
                <a class="collapse-item" href="event_details.php?parameter=cse,Postero">Postero</a>
                <a class="collapse-item" href="event_details.php?parameter=cse,Thegidi">Thegidi</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseece"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-satellite-dish"></i>
            <span>B.E ECE</span>
        </a>
        <div id="collapseece" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">EVENTS</h6>
                <a class="collapse-item" href="event_details.php?parameter=ece,Paper Presentation">Paper Presentation</a>
                <a class="collapse-item" href="event_details.php?parameter=ece,Binary Blast">Binary Blast</a>
                <a class="collapse-item" href="event_details.php?parameter=ece,Tech Kriti">Tech Kriti</a>
                <a class="collapse-item" href="event_details.php?parameter=ece,Eureka Quest">Eureka Quest</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseeee"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-microchip"></i>
            <span>B.E EEE</span>
        </a>
        <div id="collapseeee" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">EVENTS</h6>
                <a class="collapse-item" href="event_details.php?parameter=eee,Current Explore">Current Xplore</a>
                <a class="collapse-item" href="event_details.php?parameter=eee,Electritech Expo">Electritech Expo</a>
                <a class="collapse-item" href="event_details.php?parameter=eee,Minute To Win It">Minute To Win It</a>
                <a class="collapse-item" href="event_details.php?parameter=eee,Buzzy">Buzzy</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsemech"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-cog"></i>

            <span>B.E MECH</span>
        </a>
        <div id="collapsemech" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">EVENTS</h6>
                <a class="collapse-item" href="event_details.php?parameter=mech,Paper Presentation">Paper Presentation</a>
                <a class="collapse-item" href="event_details.php?parameter=mech,Cad Modeling">CAD Modeling</a>
                <a class="collapse-item" href="event_details.php?parameter=mech,Water Rocketry">Water Rocketry</a>
                <a class="collapse-item" href="event_details.php?parameter=mech,Mr.Lathe">Mr. Lathe</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    
    <!-- Divider -->
    

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
                <h3 style="color:black">Brahmastra Event Master</h3>

            <!-- Topbar Search -->
            <!--<form
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>-->

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Nav Item - Alerts -->
                

                <!-- Nav Item - Messages -->
               

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                        <img class="img-profile rounded-circle"
                            src="img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>

        <?php
        }
            else {
                header("Location:../index.html");
            }
            }
            catch (Exception $e) {
                echo("<script>alert('An Error Detected Contact Web Admin'); window.location.href='../index.html'</script>");
            }
        ?>