<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org" lang="en">
<head>
<?php include('inc/head.php'); ?>
</head>
<body>
<body>
<?php include('inc/header.php'); ?>
<!-- END nav -->

<div class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5" >
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-12 text-center mb-5">
                <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.php">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> Danh sách công việc<span></span></p>
                <h1 class="mb-3 bread">Danh sách công việc</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section bg-light" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pr-lg-4">
                <div class="row">
                    <?php
                  
                    $querycv = mysqli_query($connect, "SELECT a.*, b.tendanhmuc, c.tencongty
                    FROM congviec as a, danhmuccongviec as b, congty as c
                    WHERE a.danhmuccongviec_id =b.id
                    AND a.congty_id = c.id
                    ORDER BY a.id DESC");
                    while ($arUser = mysqli_fetch_array($querycv, MYSQLI_ASSOC)) {
                    ?>
                        <div class="col-md-12 ">
                            <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header align-items-center">
                                        <span class="subadge"><?php echo $arUser['tendanhmuc'] ?></span>
                                        <h2 class="mr-3 text-black" ><a href="chitietcongviec.php?id=<?php echo $arUser['id'] ?>"><?php echo $arUser['tieude'] ?></a></h2>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3"><span class="icon-layers"></span> <a href="#"><?php echo $arUser['tencongty'] ?></a></div>
                                        <div><span class="icon-my_location"></span> <span><?php echo $arUser['diachi'] ?></span></div>
                                    </div>
                                </div>

                                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0" style="width: 330px !important;">
                                    <a href="chitietcongviec.php?id=<?php echo $arUser['id'] ?>"  class="btn btn-primary py-2 ml-2">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</section>







<?php include('inc/footer.php'); ?>


<!-- loader -->
<!--<div th:replace="public/fragments :: loading" id="ftco-loader" class="show fullscreen"></div>-->

</body>
</html>