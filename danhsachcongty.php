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
                <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.php">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> Danh sách công ty<span></span></p>
                <h1 class="mb-3 bread">Danh sách công ty</h1>
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
                  
                    $querycv = mysqli_query($connect, "SELECT *
                    FROM congty
                    ORDER BY id DESC");
                    while ($arUser = mysqli_fetch_array($querycv, MYSQLI_ASSOC)) {
                    ?>
                        <div class="col-md-12" style="box-shadow: rgba(0, 0, 0, 0.4) 0px 0px 10px;margin: 0px auto;">
                        <div class="team d-md-flex p-4 bg-white">
                            <img style="margin-top: 10px" class="img" src="image/<?php echo $arUser['logo'] ?>"/>
                            <div class="text pl-md-4">
                            <h5 class="location mb-0"><?php echo $arUser['tencongty'] ?></h5>
                            <p class="mt-4" style="display: block;color: black"><?php echo $arUser['diachi'] ?></p>
                            <p class="mt-4" style="display: block;color: black"><?php echo $arUser['email'] ?></p>
                            <p class="mb-4" style="width: 700px" ><?php echo $arUser['sodienthoai'] ?></p>
                            <div style="margin-left: 1px" class="row">
                                <p><a href="chitietcongty.php?id=<?php echo $arUser['id'] ?>"  class="btn btn-primary">Xem chi tiết</a></p>
                            </div>
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