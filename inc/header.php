<?php include('inc/connect.php'); ?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container-fluid px-md-4	">
    <a class="navbar-brand" href="index.php">Website việc làm</a>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="index.php" class="nav-link">Trang chủ</a></li>
        <li class="nav-item active"><a href="danhsachcongviec.php" class="nav-link">Công việc</a></li>
        <li class="nav-item active"><a href="danhsachcongty.php" class="nav-link">Công ty</a></li>
        <?php if (empty($_SESSION['taikhoan'])) { ?> 
        <li class="nav-item cta cta-colored"><a href="login.php" class="nav-link">Đăng ký || Đăng nhập</a></li>
        <?php }else{ 
            $id = $_SESSION["id"];
            $sql = "
                    SELECT * 
                    FROM congty
                    WHERE taikhoan_id = '".$id."'
                ";
            $query = mysqli_query($connect, $sql);
            $num_rows = mysqli_num_rows($query);
            ?>
             <?php
            if ($num_rows != 0) {
            ?>
        <li class="nav-item cta mr-md-1"><a href="dangtuyen.php" class="nav-link">Đăng tuyển</a></li>
        <?php } ?>
        <li class="nav-item"><a class="nav-link" ><?php echo $_SESSION['hoten'] ?></a>
            <ul class="dropdown">
            <li><a href="hoso.php">Thông tin công ty</a></li>
            <li><a href="danhsachbaidang.php" >Danh sách bài đăng</a></li>
            <li><a href="logout.php" >Đăng xuất</a></li>
            </ul>
        </li>
        <?php } ?>

      </ul>
    </div>
  </div>
</nav>