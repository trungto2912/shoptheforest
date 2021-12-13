<div id="wrapper">
            <div class="overlay"></div>

            <!-- Sidebar -->
            <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
                <div class="simplebar-content" style="padding: 0px;">
                    <a class="sidebar-brand" href="">
                        <span class="align-middle">THE FOREST</span>

                    </a>

                    <ul class="navbar-nav align-self-stretch" style="margin-top: 20px">


                        <li class=""> 

                            <a class="nav-link text-left <?php if(strcmp($_GET['mod'],"dashboard")== 0) echo 'active' ?>"   role="button" 
                               aria-haspopup="true" aria-expanded="false" href="?mod=dashboard">
                                <i class="flaticon-bar-chart-1"></i> Thống kê
                            </a>
                        </li>
                        <li class=""> 
                            <?php if(isset($_SESSION['isLogin_Admin'])) { ?>
                             <a class="nav-link <?php if(strcmp($_GET['mod'],"account")== 0) echo 'active' ?>"  role="button" aria-haspopup="true" aria-expanded="false" href="?mod=account">
                                    <i class="flaticon-bar-chart-1"></i> Quản lý tài khoản
                            </a>
                            <?php } ?>


                            <a class="nav-link <?php if(strcmp($_GET['mod'],"product")== 0) echo 'active' ?>"  role="button" aria-haspopup="true" aria-expanded="false" href="?mod=product">
                                <i class="flaticon-bar-chart-1"></i> Quản lý sản phẩm
                            </a>
                             <a class="nav-link <?php if(strcmp($_GET['mod'],"category")== 0) echo 'active' ?>"  role="button" aria-haspopup="true" aria-expanded="false" href="?mod=category">
                                    <i class="flaticon-bar-chart-1"></i> Quản lý danh mục sản phẩm
                            </a>
                            <a class="nav-link <?php if(strcmp($_GET['mod'],"invoice")== 0) echo 'active' ?>"  role="button" aria-haspopup="true" aria-expanded="false" href="?mod=invoice">
                                <i class="flaticon-bar-chart-1"></i> Quản lý hóa đơn
                            </a>
                            <?php if(isset($_SESSION['isLogin_Admin'])) { ?>
                            <a class="nav-link <?php if(strcmp($_GET['mod'],"banner")== 0) echo 'active' ?>"  role="button" aria-haspopup="true" aria-expanded="false" href="?mod=banner">
                                    <i class="flaticon-bar-chart-1"></i> Quản lý banner
                            </a>
                            <?php } ?>

                        
                           
                        



                            <a class="nav-link text-left"  role="button" 
                               aria-haspopup="true" aria-expanded="false" href="../?act=home">
                                <i class="flaticon-bar-chart-1"></i> Quay lại trang chủ
                            </a>
                        </li>
                        <li class=""> 
                        </li>
                    </ul>


                </div>


            </nav>
        </div>





        <div id="wrapper">
            <div class="overlay"></div>



            <div id="page-content-wrapper ">


                <div id=" container content ">

                    <div class="container-fluid p-0 px-lg-0 px-md-0">
                        <!-- Topbar -->
                        <nav class="navbar navbar-expand navbar-light my-navbar">


                            <div type="button"  id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>


                            <!-- Topbar Search -->
                            <?php if(isset($timkiem)){ ?>
                            <form class="d-none d-sm-inline-block form-inline navbar-search" action="?mod=product&xuly=list" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light " placeholder="Tìm kiếm" aria-label="Search" name="timkiem">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <?php } ?>


                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown  d-sm-none">

                                    <div class="dropdown-menu dropdown-menu-right p-3">
                                        <form class="form-inline mr-auto w-100 navbar-search">
                                            <div class="input-group">
                                                <input type="text" class="form-control bg-light border-0 small"
                                                       placeholder="Search for..." >
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
                                <li class="nav-item dropdown ">
                                    <a class="nav-icon dropdown" href="#" id="alertsDropdown" data-toggle="dropdown" aria-expanded="false">
                                        <div class="position-relative">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell align-middle"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                            <span class="indicator">4</span>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                                        <div class="dropdown-menu-header">
                                            1 thông báo khẩn
                                        </div>
                                        <div class="list-group">
                                            <a href="#" class="list-group-item">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle text-danger"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="text-dark">Báo động khẩn</div>
                                                        <div class="text-muted small mt-1"></div>
                                                        <div class="text-muted small mt-1">ngay bây giờ</div>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>

                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="#"
                                       role="button">
                                        <i class="fas fa-envelope"></i>

                                        <span class="badge badge-danger badge-counter">7</span>
                                    </a>
                                </li>


                                <li class="nav-item dropdown ">
                                    <a class="nav-link dropdown-toggle" type="button" href="#" id="userDropdown" data-toggle="dropdown">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$_SESSION['login']['Ho']?> <?= $_SESSION['login']['Ten'] ?></span>
                                        <img class="img-profile rounded-circle" src="../public/images/user.png">
                                    </a>
                                    
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="../index.php?act=account&xuly=tk" id="drop" target="_blank">Tài khoản</a>
                                        <a class="dropdown-item" href="../?act=account&xuly=dangxuat" id="drop">Đăng xuất</a>
                                        <a class="dropdown-item" href="../?act=home" id="drop"> Quay lại Trang chủ</a>
                                    </div>

                                </li>



                            </ul>

                        </nav>
