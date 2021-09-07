<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link rel="shortcut icon" href="../../assets/favicon.ico" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-compress"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../index/index.php" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="../../index.php" target="_blank" role="button" data-toggle="tooltip" data-placement="left" title="view page">
                    <i class="far fa-paper-plane text-info"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="../../assets/img/logo/company_1.svg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Panel</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="" class="d-block">User</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-chart-bar"></i>
                                <p>
                                    Skills
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../skills/addSkill.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Skill</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../skills/skillList.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Skills List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- about section -->
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    About
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../about/aboutDetails.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Details</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../about/updateAbout.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Edit/Add Details</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- category section -->
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-filter"></i>
                                <p>
                                    Category
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../category/updateCate.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Details</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../category/addCate.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Edit/Add Details</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- education section -->
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-user-graduate"></i>
                                <p>
                                    Education
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../education/viewEdu.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Details</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../education/updateEdu.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Edit/Add Details</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- experience section -->
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <p>
                                    Experience
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../experince/viewExperince.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Details</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../experince/updateExperince.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Edit/Add Details</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- services section -->
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-hands-helping"></i>
                                <p>
                                    Services
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../services/viewServices.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Details</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../services/addService.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Edit/Add Details</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                         <!-- products section -->
                         <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fab fa-product-hunt"></i>
                                <p>
                                    Products
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../products/viewProducts.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Details</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../products/addProduct.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Edit/Add Details</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tables
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../pages/tables/simple.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Simple Tables</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../pages/tables/data.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>DataTables</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../pages/tables/jsgrid.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>jsGrid</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
    <section class="content-wrapper">