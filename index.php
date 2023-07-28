<?php
session_start();
ob_start();
require "./global.php";
require ".$MODEL_URL/pdo.php";
require ".$MODEL_URL/product.php";
include "./model/taikhoan.php";



$action = isset($_GET['action']) ? $_GET['action'] : 'male-fashion';
switch ($action) {
  case 'never':
    // header("location: ./view/main.php");
    break;
    // case 'main';
    //   require ".$VIEW_URL/main.php";
    //   break;
  case 'male-fashion':
    require ".$VIEW_URL/male-fashion.php";
    break;
  case 'female-fashion':
    require ".$VIEW_URL/female-fashion.php";
    break;
  case 'index':
    header("location: .$VIEW_URL/index.php");
    break;
  case 'add':
    break;

  case 'dangky':

    if (isset($_POST['dangky'])) {
      $full_name = $_POST['full_name'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      insert_taikhoan($full_name, $username, $password, $email);
      echo '<script>alert("Bạn đã đăng ký thành công")</script>';
    }
    require ".$VIEW_URL/female-fashion.php";
    break;
    
  case 'login':
    if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      $checkuser = checkuser($username, $password);
      if (is_array($checkuser)) {
        $_SESSION['username'] = $checkuser;

        echo '<script>alert("Đăng nhập thành công")</script>';
      } else {
        echo '<script>alert("Tài khoản hoặc mật khẩu không tồn tại")</script>';
      }
    }
    require ".$VIEW_URL/female-fashion.php";
    break;
  case 'quenmk':
    if (isset($_POST['btnsubmit']) && ($_POST['btnsubmit'] > 0)) {
      $email  = $_POST['email'];
      $checkemail = checkemail($email);
      if (is_array($checkemail)) {
        $thongbao = "Mật khẩu của bạn là:" . $checkemail['password'];
      } else {
        echo '<script>alert("Email không khớp với email đã đăng ký!")</script>';
      }
    }
    include "./view/female-fashion.php";
    break;
  case 'myaccount':
    if (isset($_POST['thaydoi']) && ($_POST['thaydoi'])) {
      $id = $_POST['id'];
      $full_name = $_POST['full_name'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $full_name = $_POST['full_name'];
      $image_user = $_FILES['image_user']['name'];
      $target_dir = "../uploads/";
      $target_file = $target_dir . basename($_FILES["image_user"]["name"]);

      if (move_uploaded_file($_FILES["image_user"]["tmp_name"], $target_file)) {
        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      } else {
        // echo "Sorry, there was an error uploading your file.";
      }

      update_taikhoan_home($id, $full_name, $username, $password, $email, $address, $phone, $image_user);
      $_SESSION['username'] = checkuser($username, $password);
      echo '<script>alert("Bạn đã cập nhật thông tin thành công")</script>';
      header('location: index.php?act=myaccount');
      $thongbao = "Bạn đã cập nhật thông tin thành công";
    }
    $listtaikhoan = loadall_taikhoan();
    require ".$VIEW_URL/myaccount.php";
    break;

  default:
    echo "Không có gì";
    break;
    case 'updatetk':
      if (isset($_POST['thaydoi']) && ($_POST['thaydoi'])) {
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $full_name = $_POST['full_name'];
        $image_user = $_FILES['image_user']['name'];
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["image_user"]["name"]);
  
        if (move_uploaded_file($_FILES["image_user"]["tmp_name"], $target_file)) {
          // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
          // echo "Sorry, there was an error uploading your file.";
        }
  
        update_taikhoan_home($id, $full_name, $username, $password, $email, $address, $phone, $image_user);
        $_SESSION['username'] = checkuser($username, $password);
        echo '<script>alert("Bạn đã cập nhật thông tin thành công")</script>';
        header('location: index.php?act=myaccount');
        $thongbao = "Bạn đã cập nhật thông tin thành công";
      }
      $listtaikhoan = loadall_taikhoan();
      require ".$VIEW_URL/myaccount.php";
      break;
  
    
    
case 'thoat':
  session_unset();
  header('Location: index.php');
  break;
}