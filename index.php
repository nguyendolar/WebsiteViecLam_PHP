<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org" lang="en">
<head>
<?php include('inc/head.php'); ?>
</head>
<body>
<body>
<?php include('inc/header.php'); ?>
<!-- END nav -->
<?php
    if (isset($_GET['msg'])) {
    ?>
<div class="toast" data-delay="2000" style="position:fixed;top: 100PX; right: 10PX;z-index: 2000;width: 300px">
    <script>
        swal({
            title: 'Đăng nhập thành công!',
            /* text: 'Redirecting...', */
            icon: 'success',
            timer: 3000,
            buttons: true,
            type: 'success'
        })
    </script>
</div>
<?php } ?>
<div class="hero-wrap img" style="background-image: url(assets/images/bg_1.jpg);height : 500px !important" >
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center" style="height : 500px !important">
            <div class="col-md-10 d-flex align-items-center ">
                <div class="text text-center pt-5 md-5">
                    <!-- <p class="mb-4">Tìm việc làm, Cơ hội việc làm và Nghề nghiệp</p> -->
                    <div >
                        <form action="timkiem.php" method="post" class="search-job">
                            <div class="row no-gutters">
                                <div class="col-md-10 mr-md-2">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <div class="icon"><span class="icon-map-marker"></span></div>
                                            <input type="text" name="keyword" class="form-control" placeholder="Nhập từ khóa liên quan đến công việc bạn muốn tìm kiếm">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <button type="submit" class="form-control btn btn-primary">Tìm kiếm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    <h1 class="mb-5">Cách dễ dàng nhất để có được công việc mới của bạn</h1>
                    <div class="ftco-counter ftco-no-pt ftco-no-pb">
                        <div class="row">
                            <div class="col-md-4 d-flex justify-content-center counter-wrap ">
                                <div class="block-18">
                                    <div class="text d-flex">
                                        <div class="icon mr-2">
                                            <span class="flaticon-visitor"></span>
                                        </div>
                                        <div class="desc text-left">
                                            <strong class="number" data-number="46">1000+</strong>
                                            <span>Ứng cử viên</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex justify-content-center counter-wrap ">
                                <div class="block-18 text-center">
                                    <div class="text d-flex">
                                        <div class="icon mr-2">
                                            <span class="flaticon-visitor"></span>
                                        </div>
                                        <div class="desc text-left">
                                            <strong class="number" data-number="450">1000+</strong>
                                            <span>Công ty</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex justify-content-center counter-wrap">
                                <div class="block-18 text-center">
                                    <div class="text d-flex">
                                        <div class="icon mr-2">
                                            <span class="flaticon-resume"></span>
                                        </div>
                                        <div class="desc text-left">
                                            <strong class="number" data-number="80000">1000+</strong>
                                            <span>Tuyển dụng</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</div>

<section class="ftco-section" style="margin-top : -70px;">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div style="display: block" class="col-md-7 heading-section text-center">
                <h2 class="mb-0">Top Công ty mới nhất</h2>
            </div>
        </div>
        <div class="row">
                <?php
                  $querycv = mysqli_query($connect, "SELECT *
                  FROM congty
                  ORDER BY id DESC
                  LIMIT 4");
                  while ($arUser = mysqli_fetch_array($querycv, MYSQLI_ASSOC)) {
                  ?>
            <div class="col-md-3 ">
                <ul class="category text-center">
                    <img width="200px" height="200px" src="image/<?php echo $arUser['logo'] ?>"/>
                    <p><a href="chitietcongty.php?id=<?php echo $arUser['id'] ?>" style="color : black;font-weight : bold"><?php echo $arUser['tencongty'] ?></a></p>
                </ul>
            </div>
            <?php } ?>
            
        </div>
    </div>
</section>

<section class="ftco-section services-section" style="margin-top : -70px;margin-bottom : -50px !important">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-3 d-flex align-self-stretch ">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-resume"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Tìm kiếm hàng triệu việc làm</h3>
                        <p>Một con sông nhỏ tên là Duden chảy qua nơi ở và nguồn cung cấp của họ.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-team"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Dễ dàng quản lý công việc</h3>
                        <p>Một con sông nhỏ tên là Duden chảy qua nơi ở và nguồn cung cấp của họ.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-career"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Top Nghề nghiệp</h3>
                        <p>Một con sông nhỏ tên là Duden chảy qua nơi ở và nguồn cung cấp của họ.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-employees"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Ứng viên Chuyên gia Tìm kiếm</h3>
                        <p>Một con sông nhỏ tên là Duden chảy qua nơi ở và nguồn cung cấp của họ.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light" style="margin-top : -70px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pr-lg-5">
                <div class="row justify-content-center pb-3">
                    <div class="col-md-12 heading-section ">
                        <h2 class="mb-4">Top Công việc mới nhất</h2>
                    </div>
                </div>
                <div class="row">
                <?php
                  $querycv = mysqli_query($connect, "SELECT a.*, b.tendanhmuc, c.tencongty
                  FROM congviec as a, danhmuccongviec as b, congty as c
                  WHERE a.danhmuccongviec_id =b.id
                  AND a.congty_id = c.id
                  ORDER BY a.id DESC
                  LIMIT 4");
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
                                  <a href="chitietcongviec.php?id=<?php echo $arUser['id'] ?>"  class="btn btn-primary py-2 ml-2" style="width: 230px;margin-left : 200px !important">Xem chi tiết</a>
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