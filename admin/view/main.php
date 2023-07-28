<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protend - Project Management Admin Dashboard HTML Template</title>
    <link rel="shortcut icon" href="../../du_an1/../du_an1/src/admin/images/favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link href='../../../unpkg.com/boxicons%402.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../du_an1/../du_an1/src/admin/libs/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../../du_an1/../du_an1/src/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../du_an1/../du_an1/src/admin/css/grid.css">
    <link rel="stylesheet" href="../../du_an1/../du_an1/src/admin/css/style1.css">
    <link rel="stylesheet" href="../../du_an1/../du_an1/src/admin/css/responsive.css">
</head>
<body class="sidebar-expand">
    
    <div class="sidebar">
        <div class="sidebar-logo">
            <a href="./index.html">
                <img src="../asset/images/logo.png" alt="Protend logo" width="200px">
                <style>
                    .sidebar-logo img{
                        object-fit: cover;
                         height: auto;
                    }
                </style>
            </a>
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>

        <div class="simlebar-sc" data-simplebar>
            <ul class="sidebar-menu tf">
                <li>
                    <a href="./index.html">
                        <i class='bx bxs-home'></i>
                        <span>Trang chủ</span>
                    </a>
                </li>
                <li>
                    <a href="./list-danhmuc.html">
                        <i class='bx bxs-bolt'></i>
                        <span>Danh mục</span>
                    </a>
                </li>
                <li>
                    <a href="./index.php?action=view_product">
                        <i class='bx bxs-user'></i>
                        <span>Sản phẩm</span>
                    </a>
                </li>
                <li>
                    <a href="./list-size.html">
                        <i class='bx bxs-user'></i>
                        <span>Size</span>
                    </a>
                </li>
                <li>
                    <a href="./list-color.html">
                        <i class='bx bxs-user'></i>
                        <span>Color</span>
                    </a>
                </li>
                <li>
                    <a href="./list-taikhoan.html">
                        <i class='bx bxs-dashboard'></i>
                        <span>Tài khoản</span>
                    </a>
                </li>
                <li>
                    <a href="./banner/banner.php">
                        <i class='bx bxs-dashboard'></i>
                        <span>Banner</span>
                    </a>
                </li>
                <li>
                    <a href="./list-bill.html">
                        <i class='bx bxs-dashboard'></i>
                        <span>Hóa đơn</span>
                    </a>
                </li>
                <li>
                    <a href="./list-cmt.html">
                        <i class='bx bx-calendar'></i>
                        <span>Bình luận</span>
                    </a>
                </li>
                <li>
                    <a href="./list-thongke.html">
                        <i class='bx bxs-component'></i>
                        <span>Thống kê</span>
                    </a>
                </li>
                <li>
                    <a class="darkmode-toggle" id="darkmode-toggle" onclick="switchTheme()">
                        <div>
                            <i class='bx bx-cog mr-10'></i>
                            <span>darkmode</span>
                        </div>
                        <span class="darkmode-switch"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
<div class="main-header">
    <div class="d-flex">
        <div class="mobile-toggle" id="mobile-toggle">
            <i class='bx bx-menu'></i>
        </div>
        
    </div>
        <div class="dropdown d-inline-block mt-12">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user"  src="../../du_an1/src/admin/images/avatar/avt-1.png" alt="Header Avatar">
                <span class="pulse-css"></span>
                <span class="info d-xl-inline-block  color-span">
                    
                    <span class="d-block fs-20 font-w600"></span>
                    <span class="d-block mt-7"></span>
                </span>
                <i class='bx bx-chevron-down'></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i>
                    <span>Profile</span></a>
                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i>
                    <span>My Wallet</span></a>
                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span>Settings</span></a>
                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i>
                    <span>Lock screen</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="../index.php"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                    <span>Logout</span></a>
            </div>
        </div>
    </div>
</div>


<div class="main">
    <div class="main-content dashboard">
        <div class="row">
            <div class="col-12">
                <div class="box card-box">

                </div>
            </div>
            <div class="col-6 col-md-6 col-sm-12 mb-0">
                <div class="row">
                    <div class="col-12">
                        <div class="box box-manage">
                            <div class="box-body d-flex pd-7 pb-0">

                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-12 col-md-12 col-sm-12">
                        <div class="box">
                            <div class="box-header">

                            </div>
                            <div class="box-body">
                                <div id="chartBar2" class="bar-chart "></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-12 col-md-12 col-sm-12">
                        <div class="box">
                            <div class="box-body center">
                                <div class="w-100"><span class="donut-2 w-100" data-peity='{ "fill": ["#9B8DFF", "#E4EAF8"]}'>228,134</span>
                                </div>
                                <h5 class="fs-20 mb-0 mt-20 font-w500 color-text mt-28">On Progress<span class="text-primary font-w600 pl-8">50% </span></h5>
                                <h5 class="fs-22 mt-18 mb-10 font-wb">Workload Dashboard For CMS Website</h5>
                                <p class="fs-18 mt-18">Praesent eu dolor eu orci vehicula euismod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="box">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="box">
                    <div class="box-header">

                    </div>

                </div>
            </div>

        </div>


    </div>
</div>

<div class="overlay"></div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="../../du_an1/src/admin/libs/jquery/jquery.min.js"></script>
<script src="../../du_an1/src/admin/libs/moment/min/moment.min.js"></script>
<script src="../../du_an1/src/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../du_an1/src/admin/libs/peity/jquery.peity.min.js"></script>
<script src="../../du_an1/src/admin/libs/chart.js/Chart.bundle.min.js"></script>
<script src="../../du_an1/src/admin/libs/owl.carousel/owl.carousel.min.js"></script>
<script src="../../du_an1/src/admin/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="../../du_an1/src/admin/libs/apexcharts/apexcharts.js"></script>
<script src="../../du_an1/src/admin/libs/simplebar/simplebar.min.js"></script>

<script src="../../du_an1/src/admin/js/main.js"></script>
<script src="../../du_an1/src/admin/js/dashboard.js"></script>
<script src="../../du_an1/src/admin/js/shortcode.js"></script>
<script src="../../du_an1/src/admin/js/pages/dashboard.js"></script>
</body>

<!-- Mirrored from themesflat.com/html/protend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Nov 2022 08:41:46 GMT -->

</html>