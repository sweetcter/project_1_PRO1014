<?php require "./header.php" ?>
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

  <!--   Phần content -->

  <!--   Phần content -->
  <!--   Phần content -->
  <div class="main">
    <div class="main-content dashboard">
      <a href="./index.php?act=add_product" class="mb-4">
        <button class="btn btn-primary">Thêm</button>
      </a>
      <span class="<?= isset($_COOKIE['notification']) ? "noti-success" : "" ?> ">
        <?= $notification = isset($_COOKIE['notification']) ? $_COOKIE['notification'] : ""; ?>
      </span>
      <form action="./index.php" method="post">
      <table id="example" class="table" style="width:100%">
        <thead>
          <tr class="table-primary">
              <th></th>
              <th>Tên sản phẩm</th>
              <th>Ảnh</th>
              <th>Giá</th>
              <th>Giảm giá</th>
              <th>Mô tả</th>
              <th>Size</th>
              <th>Color Name</th>
              <th>Color Type</th>
              <th>Ngày nhập hàng</th>
              <th>Danh mục</th>
              <th>Sửa</th>
              <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
        <?php $product_result = select_all_product_admin(); ?>
          <?php foreach ($product_result as $value) : ?>
            <tr class="table-success">
              <td></td>
              <td><?= $value['product_name']; ?></td>
              <td><img src="../..<?= $ROOT_URL ?><?= $value['main_image_url'] ?>" width="100px" alt=""></td>
              <td><?= $value['product_price']; ?></td>
              <td><?= $value['discount']; ?></td>
              <td><?= $value['product_desc']; ?></td>
              <td><?= $value['size_name']; ?></td>
              <td><?php
                  $color_name_result = select_color_name_by_id($value['color_name_id']);
                  ?>
                <?= $color_name_result['color_name'] ?>
              </td>
              <td><?= $value['color_type_name']; ?></td>
              <td><?= $value['product_import_date'] ?></td>
              <td>
                <?php $category_result = select_one_category($value['category_id']) ?>
                <?= $category_result['name_category'] ?>
              </td>
              <td>
                <a href="./index.php?act=update_product&product_id=<?= $value['product_id']; ?>"><input class="btn btn-success" type="button" name="sua" value="Sửa" /></a>
              </td>
              <td>
                <a onclick="return confirm(' Bạn có chắc chắn muốn xóa sản phẩm này')" href=".<?= $PRODUCT_URL ?>/delete_product.php?product_id=<?= $value['product_id']; ?>"><input class="btn btn-danger" type="button" name="delete" value="Xóa" /></a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
    </table>
      </form>
  <script>
    $('#example').DataTable();
  </script>
    </div>
  </div>

  <div class="overlay"></div>
<?php require "./footer.php" ?>