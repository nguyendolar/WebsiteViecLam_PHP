<!DOCTYPE html>
<html lang="en">
<head>
<?php include('inc/head.php'); ?>
</head>
<body>

<?php include('inc/header.php'); ?>
<!-- END nav -->

<div class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5" >
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-12 text-center mb-5">
                <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.php">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span>Danh sách <span></span></p>
                <h1 class="mb-3 bread">Danh sách bài đăng</h1>
            </div>
        </div>
    </div>
</div>
<?php
    if (isset($_GET['msg'])) {
    ?>
<div class="toast" data-delay="2500" style="position:fixed; top: 100PX; left: 10PX;z-index: 2000;width: 300px">
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
<section class="ftco-section bg-light" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pr-lg-4">
                <div class="row">
                    <?php
                    $id = $_SESSION["id"];
                    $sql = "
                            SELECT * 
                            FROM congty
                            WHERE taikhoan_id = '".$id."'
                        ";
                    $query = mysqli_query($connect, $sql);
                    $row = mysqli_fetch_array($query);
                    $idcongty = $row['id'];
                  
                    $querycv = mysqli_query($connect, "SELECT a.*, b.tendanhmuc 
                    FROM congviec as a, danhmuccongviec as b
                    WHERE a.danhmuccongviec_id =b.id
                    AND congty_id = '".$idcongty."'
                    ORDER BY a.id DESC");
                    while ($arUser = mysqli_fetch_array($querycv, MYSQLI_ASSOC)) {
                        $idModelDel = "exampleModalDel".$arUser["id"] ;
                    ?>
                        <div class="col-md-12 ">
                            <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header align-items-center">
                                        <span class="subadge"><?php echo $arUser['tendanhmuc'] ?></span>
                                        <h2 class="mr-3 text-black" ><a href="chitietcongviec.php?id=<?php echo $arUser['id'] ?>"><?php echo $arUser['tieude'] ?></a></h2>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3"><span class="icon-layers"></span> <a href="#"><?php echo $row['tencongty'] ?></a></div>
                                        <div><span class="icon-my_location"></span> <span><?php echo $arUser['diachi'] ?></span></div>
                                    </div>
                                </div>

                                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0" style="width: 330px !important;">
                                    <a href="chitietcongviec.php?id=<?php echo $arUser['id'] ?>"  class="btn btn-primary py-2 ml-2">Xem chi tiết</a>
                                    <a href="capnhap.php?id=<?php echo $arUser['id'] ?>"  class="btn btn-warning py-2 ml-2">Cập nhập</a>
                                    <a class="btn btn-danger py-2 ml-2" href="" data-toggle="modal" data-target="#<?php echo $idModelDel ?>">Xóa</a>

                                </div>
                            </div>
                        </div>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="<?php echo $idModelDel ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc chắn muốn xóa ?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Bài tuyển dụng : <span><?php echo $arUser['tieude'] ?></span>
                                        <form action="function.php" method="post">
                                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $arUser['id'] ?>">
                                            <div class="modal-footer mt-1">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                <button type="submit" name="xoa" class="btn btn-danger">Xóa</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</section>



<script>
    ClassicEditor.create(document.querySelector('#editorN')).then(eidt => {
        console.log("da" + eidt);
    })
        .catch(error => {
            console.error(error);
        });
</script>

<?php include('inc/footer.php'); ?>
</body>
</html>