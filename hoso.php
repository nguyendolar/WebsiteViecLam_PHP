<!DOCTYPE html>
<html lang="en">
<head>
<?php include('inc/head.php'); ?>
</head>
<body>
<?php
    if (isset($_GET['msg'])) {
    ?>
<div if="${success}" class="toast" id="toast" data-delay="2000" style="position:fixed;top: 100PX; left: 10PX;z-index: 2000;wid 300px">
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
<?php include('inc/header.php'); ?>
<!-- END nav -->

<div class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-12 text-center mb-5">
        <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.php">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span>Thông tin công ty<span></span></p>
        <h1 class="mb-3 bread">Thông tin công ty</h1>
      </div>
    </div>
  </div>
</div>
<?php
$id = $_SESSION["id"];
$sql = "
        SELECT * 
        FROM congty
        WHERE taikhoan_id = '".$id."'
    ";
$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($query);
$num_rows = mysqli_num_rows($query);
?>
<section class="site-section" style="margin-top: 10px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="mb-4">Thông tin công ty</h2>
                <div class="form-group">
                    <label for="company-website-tw d-block1">Logo</label> <br>
                    <div id="divLogo">
                        <img id="avatar1" height="100" width="100" style="border-radius: 50px" src="image/<?php echo $row['logo'] ?>">
                    </div>
                </div>
                <form action="function.php" method="post" enctype="multipart/form-data" >
                    <div class="row mb-5">
                        <div class="col-lg-12">
                            <div class="p-4 p-md-5 border rounded" method="post">
                                <div class="form-group">
                                    <label for="job-title">Tên công ty</label>
                                    <input type="text" class="form-control" name="tencongty" value="<?php echo $row['tencongty'] ?>" id="job-title"   required>
                                    <input type="hidden" class="form-control" name="idcongty" value="<?php echo $row['id'] ?>" id="job-title"   required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" required id="email1" name="email" value="<?php echo $row['email'] ?>" >
                                </div>
                                <div class="form-group">
                                    <label for="job-location">Địa chỉ</label>
                                    <input type="text" name="diachi" value="<?php echo $row['diachi'] ?>" required class="form-control" id="job-location" >
                                </div>
                                <div class="form-group">
                                    <label for="job-location">Số điện thoại công ty</label>
                                    <input type="text" name="sodienthoai" value="<?php echo $row['sodienthoai'] ?>" required class="form-control" id="job-location" >
                                </div>
                                <div class="form-group">
                                    <label for="job-location">Logo công ty</label>
                                    <input type="hidden" name="size" value="1000000"> 
                                    <input type="file" class="form-control" name="image"/>
                                </div>
                                <div class="form-group">
                                    <label for="job-location">Mô tả công ty</label>
                                    <textarea  name="mota" class="form-control" id="editorN" ><?php echo $row['mota'] ?></textarea>
                                </div>
                                <div class="row form-group" >
                                    <div class="col-md-12">
                                        <?php
                                        if ($num_rows == 0) {
                                        ?>
                                        <input type="submit" name="addcty"  value="Lưu thông tin" class="btn px-4 btn-primary text-white">
                                        <?php }else{ ?>
                                        <input type="submit" name="editcty"  value="Lưu thông tin" class="btn px-4 btn-primary text-white">
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    ClassicEditor.create(document.querySelector('#editor')).then(eidt => {
        console.log("da" + eidt);
    })
        .catch(error => {
            console.error(error);
        });
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