<!DOCTYPE html>
<html lang="en">
<head>
<?php include('inc/head.php'); ?>
</head>
<body>

<?php include('inc/header.php'); ?>

<div class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5" >
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-12 text-center mb-5">
                <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.php">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> Đăng bài<span></span></p>
                <h1 class="mb-3 bread">Đăng bài tuyển dụng</h1>
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
            title: 'Đăng tuyển thành công!',
            icon: 'success',
            timer: 3000,
            buttons: true,
            type: 'success'
        })
    </script>
</div>
<?php } ?>
<section class="site-section mt-3" >
    <div class="container">
    <form action="function.php" method="post">
        <div class="row align-items-center mb-1">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="d-flex align-items-center">
                    <div>
                        <h2>Đăng bài</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-1">
            <div class="col-lg-12">
                <div class="p-4 p-md-5 border rounded" method="post">
                    <div class="form-group">
                        <label for="email">Tiêu đề</label>
                        <input type="text" class="form-control" id="email" name="tieude" required placeholder="Tiêu đề">
                    </div>
                    <div class="form-group">
                        <label for="job-location">Mô tả công việc</label>
                        <textarea  name="mota"  class="form-control" id="editorN" placeholder="Mô tả"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="job-title">Kinh nghiệm</label>
                        <input type="text" class="form-control" id="job-title" name="kinhnghiem" placeholder="Kinh nghiệm">
                    </div>
                    <div class="form-group">
                        <label for="job-title">Số người cần tuyển</label>
                        <input type="number" class="form-control" id="job-title" name="soluong" placeholder="Số người cần tuyển">
                    </div>
                    <div class="form-group">
                        <label for="job-location">Địa chỉ làm việc</label>
                        <input type="text" class="form-control" id="job-location"  name="diachi" placeholder="Địa chỉ công ty">
                    </div>
                    <div class="form-group">
                        <label for="job-location">Lương</label>
                        <input type="text" class="form-control" id="job-location"  name="luong" placeholder="Mức lương">
                    </div>
                    <div class="form-group">
                        <label for="job-region">Danh mục công việc</label>
                        <select class="form-control" name="danhmuccongviec" aria-label="Default select example" required>
                            <option selected>Chọn danh mục công việc</option>
                            <?php
                                $lsp = mysqli_query($connect, "SELECT * FROM danhmuccongviec");
                                while ($arLsp = mysqli_fetch_array($lsp, MYSQLI_ASSOC)) {
                            ?>
                            <option value="<?php echo $arLsp['id'] ?>" ><?php echo $arLsp['tendanhmuc'] ?></option>
                            <?php } ?>

                        </select>

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
        ?>
        <div class="row align-items-center">
            <div class="col-lg-4 ml-auto">
                <div class="row">
                    <div class="col-6">
                        <a href="#" class="btn btn-block btn-light btn-md"></a>
                    </div>
                    <input type="hidden" class="form-control" id="job-location"  name="idcongty" value="<?php echo $row['id'] ?>">
                    <div class="col-6">
                        <button type="submit" name="dangtuyen" class="btn btn-block btn-primary btn-md">Đăng tuyển</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
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