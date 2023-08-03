
    <div class="main-header">
        <div class="d-flex">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class="bx bx-menu"></i>
            </div>
        </div>
        <div class="dropdown d-inline-block mt-12">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user" src="../..<?= $ROOT_URL . $SRC_URL . $ADMIN_URL ?>/images/avatar/avt-1.png" alt="Header Avatar" />
                <span class="pulse-css"></span>
                <span class="info d-xl-inline-block color-span">
                    <span class="d-block fs-20 font-w600"></span>
                    <span class="d-block mt-7"></span>
                </span>
                <i class="bx bx-chevron-down"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i>
                    <span>Profile</span></a>
                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i>
                    <span>My Wallet</span></a>
                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i>
                    <span>Settings</span></a>
                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i>
                    <span>Lock screen</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="../index.php"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                    <span>Logout</span></a>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="main-content dashboard">
            <a href="./index.php?act=view_banner" class="mb-4">
                 <button class="btn btn-primary">Dach sach</button>
            </a>
            <span class="<?= isset($_COOKIE['notification']) ? "noti-success" : "" ?> ">
                <?= $notification = isset($_COOKIE['notification']) ? $_COOKIE['notification'] : ""; ?>
            </span>
            <!-- Select product by id -->
            <?php
            if (isset($_GET['banner_id'])) {
                $banner_id = $_GET['banner_id'];
                $banner_result = select_banner_by_id($banner_id);
            ?>
                <form action="..<?= $ADMIN_URL . $BANNER_URL; ?>/progess_update_banner.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="banner_id" value="<?= $banner_id; ?>">
                    <div class="form-group mb-3">
                        <label for="banner_name">Tên sản phẩm</label>
                        <input type="text" class="form-control" value="<?= $banner_result['banner_name']; ?>" name="banner_name" id="banner_name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>
                            Ảnh cũ
                        </label>
                        <div class="mb-3">
                            <img src="../..<?= $ROOT_URL ?><?= $banner_result['banner_image'] ?>" width="100px" alt="">
                        </div>
                        <label for="banner_main_image">Ảnh chính</label>
                        <input type="file" class="form-control" name="banner_main_image" id="banner_main_image" multiple>
                        <input type="hidden" name="old_main_image" value="<?= $banner_result['banner_image'] ?>">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-success">Sửa</button>
                        <button type="reset" class="btn btn-warning">Nhập lại</button>
                    </div>
                </form>
            <?php } else { ?>
                <?= "Không có id" ?>
            <?php } ?>
        </div>
    </div>

    <div class="overlay"></div>
