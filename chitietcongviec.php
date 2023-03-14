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
                <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.php">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span>Chi tiết <span></span></p>
                <h1 class="mb-3 bread">Chi tiết công việc</h1>
            </div>
        </div>
    </div>
</div>
<?php
$id = $_GET["id"];
$sql = "SELECT a.*, b.tendanhmuc, c.logo, c.tencongty
        FROM congviec as a, danhmuccongviec as b, congty as c
        WHERE a.danhmuccongviec_id = b.id
        AND a.congty_id = c.id
        AND a.id = '".$id."'
    ";
$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($query);
?>
<section style="margin-top: 10px" class="site-section">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="d-flex align-items-center">
                    <div class="border p-2 d-inline-block mr-3 rounded">
                        <img width="100" height="100" src="image/<?php echo $row['logo'] ?>" alt="Image">
                    </div>
                    <div>
                        <h2><?php echo $row['tieude'] ?></h2>
                        <div>
                            <span class="icon-briefcase mr-2"></span><span  class="m-2"><?php echo $row['tencongty'] ?></span>
                            <span  class="icon-room mr-2"></span ><span  class="m-2"><?php echo $row['diachi'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="mb-5">

                    <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Mô tả công việc</h3>
                    <p><?php echo $row['mota'] ?></p>
                </div>

            </div>
            <div class="col-lg-5">
                <div class="bg-light p-3 border rounded mb-4">
                    <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Thông tin công việc</h3>
                    <ul class="list-unstyled pl-3 mb-0">
                        <li class="mb-2"><strong class="text-black">Danh mục công việc: </strong> <span><?php echo $row['tendanhmuc'] ?></span></li>
                        <li class="mb-2"><strong class="text-black">Yêu cầu kinh nghiệm: </strong> <span ><?php echo $row['kinhnghiem'] ?></span></li>
                        <li class="mb-2"><strong class="text-black">Đia chỉ: </strong> <span ><?php echo $row['diachi'] ?></span></li>
                        <li class="mb-2"><strong class="text-black">Lương: </strong> <span ><?php echo $row['luong'] ?></span></li>
                        <li class="mb-2"><strong class="text-black">Số lượng: </strong><span ><?php echo $row['soluong'] ?></span></li>
                        <li class="mb-2"><strong class="text-black">Ngày đăng: </strong><span ><?php echo $row['ngaytao'] ?></span></li>
                    </ul>
                </div>

                <div class="bg-light p-3 border rounded">
                    <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
                    <div class="px-3">
                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include('inc/footer.php'); ?>
</body>
</html>