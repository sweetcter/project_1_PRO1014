<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;600;700;800;900&family=Inter:wght@200;300;400;500;600&family=Montserrat:wght@300;400;700&family=Roboto+Condensed:ital,wght@0,400;0,700;1,300;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css"
    />
    <link rel="stylesheet" href="../asset/css/jqueryUI.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="../asset/slick-master/slick/slick.css"
    />
    <link rel="stylesheet" href="../asset//css/slick.css" />
    <link rel="stylesheet" href="../asset/css/base.css" />
    <link rel="stylesheet" href="../asset/css/grid.css" />
    <link rel="stylesheet" href="../asset/css/style.css" />
  </head>

  <body>
    <div id="register-modal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span id="close-button" class="close">&times;</span>
        <h2>Đăng ký</h2>
        <form id="register-form">
          <div class="form-group">
            <label for="name">Tên:</label>
            <input type="text" id="name1" name="name" required />
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email1" name="email" required />
          </div>
          <div class="form-group">
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required />
          </div>
          <div class="form-group">
            <label for="confirm-password">Nhập lại mật khẩu:</label>
            <input
              type="password"
              id="confirm-password"
              name="confirm-password"
              required
            />
          </div>
          <button type="submit" class="button">Đăng ký</button>
        </form>
      </div>
    </div>
    <div id="quen-modal" class="modal">
      <div class="modal-content">
        <span class="close-quen">&times;</span>
        <h2>Quên mật khẩu</h2>
        <form id="forgotPasswordForm">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
          <button type="submit">Gửi</button>
        </form>
      </div>
    </div>
    <div id="my-modal" class="modal1">
      <div class="modal-content">
        <span class="sign-in-close">&times;</span>
        <h2 style="text-align: center">Đăng nhập</h2>
        <form>
          <div class="form-group">
            <label for="username">Tài khoản:</label>
            <input type="text" id="username" name="username" required />
          </div>
          <div class="form-group">
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password3" name="password" required />
            <a href=""><span class="quenmk" id="openQuen">Quên mật khẩu?</span></a>
          </div>
          <br />
          <button type="submit" id="submit-btn">Đăng nhập</button>
          <br />
          <div class="dangky">
            <span>Bạn chưa có tài khoản?</span>
            <a href="/register.html">Đăng ký thành viên</a>
          </div>
        </form>
        <p id="message"></p>
      </div>
    </div>
    <!-- Nav -->
    <div></div>
    <header class="header">
      <div class="header-menu-sidebar">
        <ul class="header-menu-top-title">
          <li><a href="#" class="menu-sidebar-active">NAM</a></li>
          <li><a href="#">NỮ</a></li>
          <li><a href="#">BỘ SƯU TẬP</a></li>
        </ul>

        <ul class="header-menu-middle">
          <li><a href="#">XEM TẤT CẢ</a></li>
          <li><a href="#">NEW ARRIVALS</a></li>
          <li><a href="#">BEST SELLERS</a></li>
          <li>
            <a href="#">ÁO NAM </a>
            <i class="fa-solid fa-plus header-menu-middle-plus"></i>
            <i class="fa-solid fa-minus header-menu-middle-minus"></i>
          </li>
          <li>
            <a href="#">QUẦN NAM</a>
            <i class="fa-solid fa-plus header-menu-middle-plus"></i>
            <i class="fa-solid fa-minus header-menu-middle-minus"></i>
          </li>
          <li><a href="#">ĐỒ BƠI - ĐỒ ĐI BIỂN</a></li>
          <li>
            <a href="#">PHỤ KIỆN </a>
            <i class="fa-solid fa-plus header-menu-middle-plus"></i>
            <i class="fa-solid fa-minus header-menu-middle-minus"></i>
          </li>
          <li>
            <a href="#">ƯU ĐÃI </a>
            <span class="sale">Sale</span>
            <i class="fa-solid fa-plus header-menu-middle-plus"></i>
            <i class="fa-solid fa-minus header-menu-middle-minus"></i>
          </li>
          <li><a href="#">TIN THỜI TRANG</a></li>
        </ul>
        <ul class="header-menu-bottom">
          <i class="fa-regular fa-user header-menu-icon-user"></i>
          <li id="open-modal-btn">ĐĂNG NHẬP</li>
          <li id="register-button">ĐĂNG KÝ</li>
        </ul>
      </div>
      <!-- Hidden when scoll -->
      <div class="header-bar">
        <img src="../asset/images/menu.png" alt="" class="header-menu-bar" />
      </div>
      <div class="overlay"></div>
      <div class="header-logo">
        <a href="#">
          <img
            src="../asset/images/routine_log.png"
            alt=""
            class="header-logo-img"
          />
        </a>
      </div>
      <!-- end -->
      <!-- second header -->
      <ul class="header-nav">
        <div class="header-second-logo">
          <a href="#">
            <img
              src="../asset/images/routine_log.png"
              alt=""
              class="header-logo-img"
            />
          </a>
        </div>
        <li class="header-nav-item">
          <a class="header-nav-link" href="./male-fashion.html">NAM</a>
        </li>
        <li class="header-nav-item">
          <a class="header-nav-link" href="./female-fashion.html">NỮ</a>
        </li>
        <li class="header-nav-item">
          <a class="header-nav-link" href="#">NEW</a>
        </li>
        <li class="header-nav-item">
          <a class="header-nav-link" href="#">BEST</a>
        </li>
        <li class="header-nav-item">
          <a class="header-nav-link" href="#">SALE</a>
        </li>
      </ul>

      <div class="header-content-right">
        <div class="header-search-bar">
          <div>
            <i class="fa-solid fa-magnifying-glass header-search-icon"></i>
          </div>
          <form action="">
            <input
              type="text"
              name=""
              placeholder="Tìm kiếm"
              class="header-search-content"
            />
          </form>
        </div>
        <div class="header-content-tool">
          <div>
            <i class="fa-regular fa-user header-content-user"></i>
          </div>
          <div>
            <i class="fa-regular fa-heart header-content-heart"></i>
          </div>
          <div>
            <i
              class="fa-solid fa-heart header-content-heart"
              style="display: none"
            ></i>
          </div>
          <div>
            <i class="fa-solid fa-cart-shopping header-content-cart"></i>
          </div>
        </div>
      </div>
    </header>

    <!-- End nav -->
    <div class="wrapper">
      <ul class="breadcrumbs">
        <li>Trang chủ /</li>
        <li>Thời trang nữ</li>
      </ul>

      <main id="main-content">
        <div class="main-banner">
          <img
            src="../asset/images/rainFashion.jpg"
            alt=""
            class="main-banner-img"
          />
        </div>

        <h3 class="category-title">Thời Trang Nữ</h3>

        <div class="functions">
          <div class="filter-function">
            Bộ lọc
            <i class="fa-solid fa-filter"></i>
          </div>
          <div class="view-function">
            <strong>363</strong>
            Sản phẩm
          </div>
          <div class="sort-function">
            Sắp xếp
            <form action="">
              <select name="" id="" class="sort-function-select">
                <option value="">Mặc định</option>
              </select>
            </form>
          </div>
        </div>

        <div class="main-colums">
          <!-- block filter -->

          <div class="filter-sidebar">
            <div class="filter-block">
              <div class="filter-category active">
                <ul>
                  DANH MỤC
                </ul>
                <i class="fa-solid fa-chevron-down filter-dropdown"></i>
              </div>
              <div class="filter-list">
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manShirt"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manShirt"
                  >
                  </label>
                  <a href="#">Áo Nữ</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Quần Nữ</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Chân Váy - Đầm Nữ</a>
                </li>
              </div>
            </div>

            <div class="filter-block">
              <div class="filter-category">
                <ul>
                  NHÓM SẢN PHẨM
                </ul>
                <i class="fa-solid fa-chevron-down filter-dropdown"></i>
              </div>
              <div class="filter-list">
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manShirt"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manShirt"
                  >
                  </label>
                  <a href="#">Áo Nữ</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Quần Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manShirt"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manShirt"
                  >
                  </label>
                  <a href="#">Áo Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Quần Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manShirt"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manShirt"
                  >
                  </label>
                  <a href="#">Áo Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Quần Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manShirt"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manShirt"
                  >
                  </label>
                  <a href="#">Áo Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Quần Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manShirt"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manShirt"
                  >
                  </label>
                  <a href="#">Áo Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Quần Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manShirt"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manShirt"
                  >
                  </label>
                  <a href="#">Áo Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Quần Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manShirt"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manShirt"
                  >
                  </label>
                  <a href="#">Áo Nam</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Quần Nam</a>
                </li>
              </div>
            </div>
            <div class="filter-block">
              <div class="filter-category">
                <ul>
                  GIỚI TÍNH
                </ul>
                <i class="fa-solid fa-chevron-down filter-dropdown"></i>
              </div>
              <div class="filter-list">
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manShirt"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manShirt"
                  >
                  </label>
                  <a href="#">Nữ</a>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Unisex</a>
                </li>
              </div>
            </div>
            <div class="filter-block">
              <div class="filter-category">
                <ul>
                  SIZE
                </ul>
                <i class="fa-solid fa-chevron-down filter-dropdown"></i>
              </div>
              <div class="filter-list flex-col-4">
                <span class="filter-list-size"> 28 </span>
                <span class="filter-list-size"> M </span>
                <span class="filter-list-size"> L </span>
                <span class="filter-list-size"> xl</span>
              </div>
            </div>

            <div class="filter-block">
              <div class="filter-category">
                <ul>
                  MÀU SẮC
                </ul>
                <i class="fa-solid fa-chevron-down filter-dropdown"></i>
              </div>
              <div class="filter-list row-col-2">
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manShirt"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manShirt"
                  >
                  </label>
                  <a href="#">Đen</a>
                  <div
                    class="filter-list-color"
                    style="background-image: url('../asset/images/black.png')"
                  ></div>
                </li>

                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Trắng</a>
                  <div
                    class="filter-list-color"
                    style="background-image: url('../asset/images/white.png')"
                  ></div>
                </li>

                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Be</a>
                  <div
                    class="filter-list-color"
                    style="background-image: url('../asset/images/be.png')"
                  ></div>
                </li>
                <li class="filter-category-name">
                  <input
                    type="checkbox"
                    name=""
                    id="filter-checkbox-manPants"
                    class="filter-checkbox"
                  />
                  <label
                    class="filter-newCheckbox"
                    for="filter-checkbox-manPants"
                  ></label>
                  <a href="#">Xám bạc</a>
                  <div
                    class="filter-list-color"
                    style="background-image: url('../asset/images/xam_bac.png')"
                  ></div>
                </li>
              </div>
            </div>
            <div class="filter-block">
              <div class="filter-category">
                <ul>
                  GIÁ TIỀN
                </ul>
                <i class="fa-solid fa-chevron-down filter-dropdown"></i>
              </div>
              <div class="filter-list">
                <div id="multi-range-slider" class="filter-price"></div>
                <div class="filter-price-control">
                  <div>
                    <span>₫</span
                    ><span id="start-value" class="filter-price-min"
                      >79000đ</span
                    >
                  </div>
                  <div>
                    <span>₫</span
                    ><span id="end-value" class="filter-price-max"
                      >1375000đ</span
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="product-colum">
            <div class="product-row row-col-4">
              <!-- start item -->

              <div class="product-item">
                <a href="#" class="product-image-item">
                  <img
                    src="../asset/images/product1.jpg"
                    alt=""
                    class="product-image"
                  />
                  <img
                    src="../asset/images/aothuntayngan1.jpg"
                    alt=""
                    class="product-image-second"
                  />
                </a>
                <div class="product-title">
                  <a href="#" class="product-name">
                    Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
                  </a>
                  <i class="fa-regular fa-heart product-icon"></i>
                </div>
                <div class="product-price">
                  <span class="product-newPrice">324.000₫</span>
                  <span class="product-oldPrice">329.000₫</span>
                </div>
                <span class="product-newProduct">
                  <img src="../asset/images/newProduct.png" alt="" />
                </span>
                <span class="product-discount"> -2% </span>

                <div class="product-color-list">
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../asset/images/aothuntayngan1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../asset/images/aothuntayngan1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BRIGHT WHITE </span>
                    </div>
                  </div>

                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../asset/images/aothuntaynganden.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../asset/images/aothuntaynganden.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BLACK BEAUTY </span>
                    </div>
                  </div>

                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../asset/images/aothuntaynganbe.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../asset/images/aothuntaynganbe.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> RAINDROPS </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end item -->
              <!-- start item -->

              <div class="product-item">
                <a href="#" class="product-image-item">
                  <img
                    src="../asset/images/product1.jpg"
                    alt=""
                    class="product-image"
                  />
                  <img
                    src="../asset/images/aothuntayngan1.jpg"
                    alt=""
                    class="product-image-second"
                  />
                </a>
                <div class="product-title">
                  <a href="#" class="product-name">
                    Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                  </a>
                  <i class="fa-regular fa-heart product-icon"></i>
                </div>
                <div class="product-price">
                  <span class="product-newPrice">441.000₫</span>
                  <span class="product-oldPrice">499.000₫</span>
                </div>
                <span class="product-discount"> -2% </span>
                <div class="product-color-list">
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../asset/images/aothuntayngan1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../asset/images/aothuntayngan1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BALAD BLUE </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end item -->
              <!-- start item -->

              <div class="product-item">
                <a href="#" class="product-image-item">
                  <img
                    src="../asset/images/product1.jpg"
                    alt=""
                    class="product-image"
                  />
                  <img
                    src="../asset/images/aothuntayngan1.jpg"
                    alt=""
                    class="product-image-second"
                  />
                </a>
                <div class="product-title">
                  <a href="#" class="product-name">
                    Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                  </a>
                  <i class="fa-regular fa-heart product-icon"></i>
                </div>
                <div class="product-price">
                  <span class="product-newPrice">441.000₫</span>
                  <span class="product-oldPrice">499.000₫</span>
                </div>
                <span class="product-discount"> -2% </span>
                <div class="product-color-list">
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../asset/images/aothuntayngan1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../asset/images/aothuntayngan1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BRIGHT WHITE </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end item -->
              <!-- start item -->

              <div class="product-item">
                <a href="#" class="product-image-item">
                  <img
                    src="../asset/images/product1.jpg"
                    alt=""
                    class="product-image"
                  />
                  <img
                    src="../asset/images/aothuntayngan1.jpg"
                    alt=""
                    class="product-image-second"
                  />
                </a>
                <div class="product-title">
                  <a href="#" class="product-name">
                    Áo Sơ Mi Nam Tay Ngắn Linen Xếp Ly Trước Form Fitted
                  </a>
                  <i class="fa-regular fa-heart product-icon"></i>
                </div>
                <div class="product-price">
                  <span class="product-newPrice">441.000₫</span>
                  <span class="product-oldPrice">499.000₫</span>
                </div>
                <span class="product-discount"> -2% </span>
                <div class="product-color-list">
                  <div class="product-color">
                    <div class="product-color-child">
                      <img
                        src="../asset/images/aothuntayngan1.jpg"
                        alt=""
                        class="product-color-img"
                      />
                    </div>
                    <div class="product-color-hover">
                      <img
                        src="../asset/images/aothuntayngan1.jpg"
                        alt=""
                        class="product-color-img-hover"
                      />
                      <span class="product-color-name"> BRIGHT WHITE </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end item -->
            </div>

            <ul class="home-pagination">
              <li class="home-pagination-item home-pagination-disable">
                <a href="#" class="home-pagination-link">
                  <i class="fa-solid fa-angle-left home-pagination-icon"></i>
                </a>
              </li>
              <li class="home-pagination-item home-pagination-disable">
                <a href="#" class="home-pagination-link">
                  <i class="fa-solid fa-angles-left home-pagination-icon"></i>
                </a>
              </li>
              <li class="home-pagination-item home-pagination-active">
                <a class="home-pagination-link" href="#">1</a>
              </li>
              <li class="home-pagination-item">
                <a class="home-pagination-link" href="#">2</a>
              </li>
              <li class="home-pagination-item">...</li>
              <li class="home-pagination-item">
                <a class="home-pagination-link" href="#">15</a>
              </li>
              <li class="home-pagination-item">
                <a class="home-pagination-link" href="#">16</a>
              </li>
              <li class="home-pagination-item">
                <a href="#" class="home-pagination-link">
                  <i class="fa-solid fa-angle-right home-pagination-icon"></i>
                </a>
              </li>
              <li class="home-pagination-item">
                <a href="#" class="home-pagination-link">
                  <i class="fa-solid fa-angles-right home-pagination-icon"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </main>

      <div class="product-suggest">
        <h3 class="product-suggest-title">
          GỢI Ý CHO BẠN: CÁC SẢN PHẨM ĐƯỢC QUAN TÂM NHẤT
        </h3>
        <div class="my-slickSilder">
          <!-- start item -->
          <div class="product-item">
            <a href="#" class="product-image-item">
              <img
                src="../asset/images/product1.jpg"
                alt=""
                class="product-image"
              />
            </a>
            <div class="product-title">
              <a href="#" class="product-name">
                Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
              </a>
              <i class="fa-regular fa-heart product-icon"></i>
            </div>
            <div class="product-price">
              <span class="product-newPrice">324.000₫</span>
              <span class="product-oldPrice">329.000₫</span>
              <span class="product-discount"> -2% </span>
            </div>
            <span class="product-newProduct">
              <img src="../asset/images/newProduct.png" alt="" />
            </span>

            <div class="product-color-list">
              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntayngan1.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganden.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganbe.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- end item -->
          <!-- start item -->
          <div class="product-item">
            <a href="#" class="product-image-item">
              <img
                src="../asset/images/product1.jpg"
                alt=""
                class="product-image"
              />
            </a>
            <div class="product-title">
              <a href="#" class="product-name">
                Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
              </a>
              <i class="fa-regular fa-heart product-icon"></i>
            </div>
            <div class="product-price">
              <span class="product-newPrice">324.000₫</span>
              <span class="product-oldPrice">329.000₫</span>
              <span class="product-discount"> -2% </span>
            </div>
            <span class="product-newProduct">
              <img src="../asset/images/newProduct.png" alt="" />
            </span>

            <div class="product-color-list">
              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntayngan1.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganden.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganbe.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- end item -->
          <!-- start item -->
          <div class="product-item">
            <a href="#" class="product-image-item">
              <img
                src="../asset/images/product1.jpg"
                alt=""
                class="product-image"
              />
            </a>
            <div class="product-title">
              <a href="#" class="product-name">
                Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
              </a>
              <i class="fa-regular fa-heart product-icon"></i>
            </div>
            <div class="product-price">
              <span class="product-newPrice">324.000₫</span>
              <span class="product-oldPrice">329.000₫</span>
              <span class="product-discount"> -2% </span>
            </div>
            <span class="product-newProduct">
              <img src="../asset/images/newProduct.png" alt="" />
            </span>

            <div class="product-color-list">
              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntayngan1.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganden.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganbe.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- end item -->
          <!-- start item -->
          <div class="product-item">
            <a href="#" class="product-image-item">
              <img
                src="../asset/images/product1.jpg"
                alt=""
                class="product-image"
              />
            </a>
            <div class="product-title">
              <a href="#" class="product-name">
                Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
              </a>
              <i class="fa-regular fa-heart product-icon"></i>
            </div>
            <div class="product-price">
              <span class="product-newPrice">324.000₫</span>
              <span class="product-oldPrice">329.000₫</span>
              <span class="product-discount"> -2% </span>
            </div>
            <span class="product-newProduct">
              <img src="../asset/images/newProduct.png" alt="" />
            </span>

            <div class="product-color-list">
              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntayngan1.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganden.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganbe.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- end item -->
          <!-- start item -->
          <div class="product-item">
            <a href="#" class="product-image-item">
              <img
                src="../asset/images/product1.jpg"
                alt=""
                class="product-image"
              />
            </a>
            <div class="product-title">
              <a href="#" class="product-name">
                Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
              </a>
              <i class="fa-regular fa-heart product-icon"></i>
            </div>
            <div class="product-price">
              <span class="product-newPrice">324.000₫</span>
              <span class="product-oldPrice">329.000₫</span>
              <span class="product-discount"> -2% </span>
            </div>
            <span class="product-newProduct">
              <img src="../asset/images/newProduct.png" alt="" />
            </span>

            <div class="product-color-list">
              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntayngan1.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganden.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganbe.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- end item -->
          <!-- start item -->
          <div class="product-item">
            <a href="#" class="product-image-item">
              <img
                src="../asset/images/product1.jpg"
                alt=""
                class="product-image"
              />
            </a>
            <div class="product-title">
              <a href="#" class="product-name">
                Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
              </a>
              <i class="fa-regular fa-heart product-icon"></i>
            </div>
            <div class="product-price">
              <span class="product-newPrice">324.000₫</span>
              <span class="product-oldPrice">329.000₫</span>
              <span class="product-discount"> -2% </span>
            </div>
            <span class="product-newProduct">
              <img src="../asset/images/newProduct.png" alt="" />
            </span>

            <div class="product-color-list">
              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntayngan1.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganden.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganbe.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- end item -->
          <!-- start item -->
          <div class="product-item">
            <a href="#" class="product-image-item">
              <img
                src="../asset/images/product1.jpg"
                alt=""
                class="product-image"
              />
            </a>
            <div class="product-title">
              <a href="#" class="product-name">
                Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
              </a>
              <i class="fa-regular fa-heart product-icon"></i>
            </div>
            <div class="product-price">
              <span class="product-newPrice">324.000₫</span>
              <span class="product-oldPrice">329.000₫</span>
              <span class="product-discount"> -2% </span>
            </div>
            <span class="product-newProduct">
              <img src="../asset/images/newProduct.png" alt="" />
            </span>

            <div class="product-color-list">
              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntayngan1.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganden.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganbe.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- end item -->
          <!-- start item -->
          <div class="product-item">
            <a href="#" class="product-image-item">
              <img
                src="../asset/images/product1.jpg"
                alt=""
                class="product-image"
              />
            </a>
            <div class="product-title">
              <a href="#" class="product-name">
                Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
              </a>
              <i class="fa-regular fa-heart product-icon"></i>
            </div>
            <div class="product-price">
              <span class="product-newPrice">324.000₫</span>
              <span class="product-oldPrice">329.000₫</span>
              <span class="product-discount"> -2% </span>
            </div>
            <span class="product-newProduct">
              <img src="../asset/images/newProduct.png" alt="" />
            </span>

            <div class="product-color-list">
              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntayngan1.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganden.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganbe.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- end item -->
          <!-- start item -->
          <div class="product-item">
            <a href="#" class="product-image-item">
              <img
                src="../asset/images/product1.jpg"
                alt=""
                class="product-image"
              />
            </a>
            <div class="product-title">
              <a href="#" class="product-name">
                Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
              </a>
              <i class="fa-regular fa-heart product-icon"></i>
            </div>
            <div class="product-price">
              <span class="product-newPrice">324.000₫</span>
              <span class="product-oldPrice">329.000₫</span>
              <span class="product-discount"> -2% </span>
            </div>
            <span class="product-newProduct">
              <img src="../asset/images/newProduct.png" alt="" />
            </span>

            <div class="product-color-list">
              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntayngan1.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganden.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganbe.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- end item -->
          <!-- start item -->
          <div class="product-item">
            <a href="#" class="product-image-item">
              <img
                src="../asset/images/product1.jpg"
                alt=""
                class="product-image"
              />
            </a>
            <div class="product-title">
              <a href="#" class="product-name">
                Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
              </a>
              <i class="fa-regular fa-heart product-icon"></i>
            </div>
            <div class="product-price">
              <span class="product-newPrice">324.000₫</span>
              <span class="product-oldPrice">329.000₫</span>
              <span class="product-discount"> -2% </span>
            </div>
            <span class="product-newProduct">
              <img src="../asset/images/newProduct.png" alt="" />
            </span>

            <div class="product-color-list">
              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntayngan1.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganden.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganbe.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- end item -->
          <!-- start item -->
          <div class="product-item">
            <a href="#" class="product-image-item">
              <img
                src="../asset/images/product1.jpg"
                alt=""
                class="product-image"
              />
            </a>
            <div class="product-title">
              <a href="#" class="product-name">
                Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
              </a>
              <i class="fa-regular fa-heart product-icon"></i>
            </div>
            <div class="product-price">
              <span class="product-newPrice">324.000₫</span>
              <span class="product-oldPrice">329.000₫</span>
              <span class="product-discount"> -2% </span>
            </div>
            <span class="product-newProduct">
              <img src="../asset/images/newProduct.png" alt="" />
            </span>

            <div class="product-color-list">
              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntayngan1.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganden.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganbe.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- end item -->
          <!-- start item -->
          <div class="product-item">
            <a href="#" class="product-image-item">
              <img
                src="../asset/images/product1.jpg"
                alt=""
                class="product-image"
              />
            </a>
            <div class="product-title">
              <a href="#" class="product-name">
                Áo Thun Tay Ngắn Nữ Họa Tiết In Phối Chỉ Form Fitted Crop
              </a>
              <i class="fa-regular fa-heart product-icon"></i>
            </div>
            <div class="product-price">
              <span class="product-newPrice">324.000₫</span>
              <span class="product-oldPrice">329.000₫</span>
              <span class="product-discount"> -2% </span>
            </div>
            <span class="product-newProduct">
              <img src="../asset/images/newProduct.png" alt="" />
            </span>

            <div class="product-color-list">
              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntayngan1.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganden.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>

              <div class="product-color">
                <div class="product-color-child">
                  <img
                    src="../asset/images/aothuntaynganbe.jpg"
                    alt=""
                    class="product-color-img"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- end item -->
        </div>
      </div>
      <footer>Coppy right 2023</footer>
    </div>
    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <script
      type="text/javascript"
      src="../asset/slick-master/slick/slick.min.js"
    ></script>
    <script src="../asset/js/mutipleRangeJquery.js"></script>
    <script type="text/javascript" src="../asset/js/slick.js"></script>
    <script src="../asset/js/main.js"></script>
  </body>
</html>