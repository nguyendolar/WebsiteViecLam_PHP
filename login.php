<!DOCTYPE html>
<html lang="en">
<head>
<?php include('inc/head.php'); ?>
</head>
<body>

<?php include('inc/header.php'); ?>

<div class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-12 text-center mb-5">
        <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.php">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> đăng nhập<span></span></p>
        <h1 class="mb-3 bread">Đăng ký / Đăng nhập</h1>
      </div>
    </div>
  </div>
</div>
  <?php
    if (isset($_GET['msg'])) {
    ?>
  <div class="toast" data-delay="2500" style="position:fixed; top: 100PX; right: 10PX;z-index: 2000;width: 300px">
    <script>
      swal({
        title: 'Thành công!',
        /* text: 'Redirecting...', */
        icon: 'success',
        timer: 3000,
        buttons: true,
        type: 'success'
      })
    </script>
  </div>
<?php } ?>
<?php
    if (isset($_GET['fail'])) {
    ?>
<div class="toast" data-delay="2500" style="position:fixed; top: 100PX; right: 10PX;z-index: 2000;width: 300px">
  <script>
    swal({
      title: 'Thất bại!',
      /* text: 'Redirecting...', */
      icon: 'error',
      timer: 3000,
      buttons: true,
      type: 'error'
    })
  </script>
</div>
<?php } ?>
<!-- HOME -->

<section class="site-section mt-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-5">
        <h2 class="mb-4">Đăng ký</h2>
        <form action="function.php" method="post" class="p-4 border rounded">

          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="text-black" for="fname">Họ và tên</label>
              <input type="text" id="email" name="hoten" class="form-control" placeholder="Họ và tên" required>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="text-black" for="fname">Tài khoản</label>
              <input type="text" id="email" name="taikhoan" class="form-control" placeholder="Tài khoản" required>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="text-black" for="fname">Mật khẩu</label>
              <input type="password" id=""  name="matkhau" class="form-control" placeholder="Mật khẩu" required>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" value="Đăng ký" name="dangky" class="btn px-4 btn-primary text-white">
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-6">
        <h2 class="mb-4">Đăng nhập</h2>
        <form action="function.php" method="post" class="p-4 border rounded">

          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="text-black" for="fname">Tài khoản</label>
              <input type="text" id="fname" name="taikhoan" class="form-control" placeholder="Tài khoản" required>
            </div>
          </div>
          <div class="row form-group mb-4">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="text-black" for="fname">Mật khẩu</label>
              <input type="password" id="fname" name="matkhau" class="form-control" placeholder="Mật khẩu" required>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" value="Đăng nhập" name="dangnhap" class="btn px-4 btn-primary text-white">
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>

<?php include('inc/footer.php'); ?>

</footer>
</body>
</html>