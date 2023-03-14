<?php
include('inc/connect.php');
//Đăng nhập
if(isset($_POST['dangnhap'])){
    $taikhoan = $_POST['taikhoan'];
    $matkhau  = $_POST['matkhau'];
    $query = "SELECT * FROM taikhoan WHERE taikhoan='$taikhoan'";
    $result = mysqli_query($connect, $query);
    $num_rows = mysqli_num_rows($result);
    if ($num_rows == 0) {
      header("Location: login.php?fail=1");
    } 
    else {
      $row = mysqli_fetch_array($result);
      if ($matkhau != $row['matkhau']) {
        header("Location: login.php?fail=1");
      }
      else{
        header("Location: index.php?msg=1");
      $_SESSION['taikhoan'] = $taikhoan;
      $_SESSION['hoten'] = $row['hoten'];
      $_SESSION['id'] = $row['id'];
      }
    }
}
//Đăng ký
if(isset($_POST['dangky'])){
      $hoten = $_POST['hoten'];
      $taikhoan = $_POST['taikhoan'];
      $matkhau  = $_POST['matkhau'];
      $check = "SELECT * FROM taikhoan WHERE taikhoan='$taikhoan'";
      $excute = mysqli_query($connect, $check);
      $row = mysqli_num_rows($excute);
      if($row > 0)
      {
          header("Location: login.php?fail=2");
      }else{
      $query = "INSERT INTO taikhoan ( `hoten`, `taikhoan`, `matkhau`) 
    VALUES ( '{$hoten}', '{$taikhoan}', '{$matkhau}') ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: login.php?msg=1");
    } 
    else {
        header("Location: login.php?fail=2");
    }
  }
}
//Công ty
$tkid = $_SESSION['id'];
if(isset($_POST['addcty'])){
    $tencongty = $_POST['tencongty'];
    $mota  = $_POST['mota'];
    $diachi = $_POST['diachi'];
    $email = $_POST['email'];
    $sodienthoai = $_POST['sodienthoai'];
    //Upload ảnh
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_parts =explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($file_parts));
    $expensions= array("jpeg","jpg","png");
    $image = $_FILES['image']['name'];
    $target = "./image/".basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $query = "INSERT INTO congty ( diachi, mota, email, logo, tencongty, sodienthoai, taikhoan_id) 
    VALUES ( '{$diachi}', '{$mota}', '{$email}', '{$image}', '{$tencongty}', '{$sodienthoai}', '{$tkid}') ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: hoso.php?msg=1");
    } 
    else {
        header("Location: hoso.php?msg=2");
    }
}
if(isset($_POST['editcty'])){
    $tencongty = $_POST['tencongty'];
    $mota  = $_POST['mota'];
    $diachi = $_POST['diachi'];
    $email = $_POST['email'];
    $sodienthoai = $_POST['sodienthoai'];
    $id  = $_POST['idcongty'];
    //Upload ảnh
    $file_name = $_FILES['image']['name'];
    if(empty($file_name)){
        $query = "UPDATE `congty` 
        SET `tencongty`='{$tencongty}',`mota`='{$mota}',`diachi`='{$diachi}',`email`='{$email}',`sodienthoai`='{$sodienthoai}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: hoso.php?msg=1");
        } 
        else {
            header("Location: hoso.php?msg=2");
        }
    }
    else{
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_parts =explode('.',$_FILES['image']['name']);
        $file_ext=strtolower(end($file_parts));
        $expensions= array("jpeg","jpg","png");
        $image = $_FILES['image']['name'];
        $target = "./image/".basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $query = "UPDATE `congty` 
        SET `tencongty`='{$tencongty}',`mota`='{$mota}',`diachi`='{$diachi}',`email`='{$email}',`sodienthoai`='{$sodienthoai}', `logo`='{$image}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: hoso.php?msg=1");
        } 
        else {
            header("Location: hoso.php?msg=2");
        }
    }
    
}
//Công việc
if(isset($_POST['dangtuyen'])){
    $tieude = $_POST['tieude'];
    $mota  = $_POST['mota'];
    $diachi = $_POST['diachi'];
    $kinhnghiem = $_POST['kinhnghiem'];
    $soluong = $_POST['soluong'];
    $luong = $_POST['luong'];
    $danhmuccongviec = $_POST['danhmuccongviec'];
    $congty = $_POST['idcongty'];
    $query = "INSERT INTO congviec ( diachi, kinhnghiem, soluong, luong, tieude, congty_id, danhmuccongviec_id,  mota) 
    VALUES ( '{$diachi}', '{$kinhnghiem}', '{$soluong}', '{$luong}', '{$tieude}', '{$congty}', '{$danhmuccongviec}' , '{$mota}') ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: dangtuyen.php?msg=1");
    } 
    else {
        header("Location: dangtuyen.php?msg=2");
    }
}
if(isset($_POST['capnhap'])){
    $tieude = $_POST['tieude'];
    $mota  = $_POST['mota'];
    $diachi = $_POST['diachi'];
    $kinhnghiem = $_POST['kinhnghiem'];
    $soluong = $_POST['soluong'];
    $luong = $_POST['luong'];
    $danhmuccongviec = $_POST['danhmuccongviec'];
    $congty = $_POST['idcongty'];
    $id  = $_POST['idcongviec'];
    $query = "UPDATE `congviec` 
        SET `tieude`='{$tieude}',`mota`='{$mota}',`diachi`='{$diachi}',`kinhnghiem`='{$kinhnghiem}',`soluong`='{$soluong}',`luong`='{$luong}',`danhmuccongviec_id`='{$danhmuccongviec}'
        WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: capnhap.php?id=$id&msg=1");
    } 
    else {
        header("Location: capnhap.php?id=$id&msg=2");
    }
}
if(isset($_POST['xoa'])){
    $id  = $_POST['id'];
        $query = "DELETE FROM congviec WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        header("Location: danhsachbaidang.php?msg=1");
    
}

?>
 