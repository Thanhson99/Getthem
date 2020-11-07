<?php 
    $mh = $_GET['mh'];
    $getData = "SELECT * FROM `mathang` WHERE MaHang=".$mh;
    $a = mysqli_query($conn, $getData);
    $b = mysqli_fetch_array($a);
?>
	<div class="container" style = "margin-top: 50px;">
		<form role="form" method="post" class="login-form cf-style-1" enctype="multipart/form-data">
            <div class="field-row">
                <label>Tên hàng (*)</label>
                <input name="tenhang" id="tenHang" required type="text" placeholder="Nhập tên hàng" class="le-input" value="<?php echo $b['TenHang']?>">
            </div>
            <div class="field-row">
                <label>Tình trạng (*)</label>
                <input name="tinhtrang" id="tinhTrang" required type="text" placeholder="Tình trạng hàng" class="le-input" value="<?php echo $b['TinhTrang']?>">
            </div>
            <div class="field-row">
                <label>Giá bán (*)</label>
                <input name="giaban" id="giaBan" required type="number" placeholder="VNĐ" class="le-input" value="<?php echo $b['GiaBan']?>">
            </div>
            <div class="field-row">
                <label>Chọn ảnh (*)</label>
				<input value="assets/images/products/<?php echo $b['Anh']?>" name="image" type="file" onchange="previewFile()" id="id_file_name">
				<img id="anhHang" src="assets/images/products/<?php echo $b['Anh']?>" alt="ảnh sản phẩm">
                <span id="err"></span>
            </div>
            <div class="field-row">
                <label>Mô tả (*)</label>
                 <textarea name="mota" id="moTa" required class="le-input" cols="22" rows="8"><?php echo $b['MoTa']?></textarea>
            </div>
            <div class="field-row">
            	<label for="cars">Danh mục (*)</label>
					<select name="danhmuc" required id="danhMuc" class="form-control">
                        <?php
                            $getDanhMuc = "SELECT * FROM `danhmuc` WHERE MaDanhMuc='" .$b['MaDanhMuc']. "'";
                            $c = mysqli_query($conn, $getDanhMuc);
                            $d = mysqli_fetch_array($c);
                            echo '<option value="'.$d['MaDanhMuc'].'">'.$d['TenDanhMuc'].'</option>';
                            $getDanhMuc = "SELECT * FROM `danhmuc`";
                            // $c = mysqli_query($conn, $checkEmail);
                            // $d = mysqli_fetch_array($c);
                            $result = $conn->query($getDanhMuc);
                            while($row = $result->fetch_assoc()){
                                echo '<option value="'.$row['MaDanhMuc'].'">'.$row['TenDanhMuc'].'</option>';
                            };
                        ?>
					</select>
            </div>
            <div class="field-row">
            	<label for="cars">Tỉnh thành phố (*)</label>
					<select name="tinhtp" required id="tinhTP" class="form-control">
                      <?php 
                            $getTP = "SELECT * FROM `tinhtp` INNER JOIN (select MaTinhTP from `quanhuyen` where MaQuanHuyen = '".$b['MaQuanHuyen']."') as T on tinhtp.MaTinhTP = T.MaTinhTP";
                            $c = mysqli_query($conn, $getTP);
                            $d = mysqli_fetch_array($c);
                            echo '<option value="'.$d['MaTinhTP'].'">'.$d['TenTinhTP'].'</option>';

                            $getTP = "SELECT * FROM `tinhtp`";
                            // $c = mysqli_query($conn, $checkEmail);
                            // $d = mysqli_fetch_array($c);
                            $result = $conn->query($getTP);
                            while($row = $result->fetch_assoc()){
                                echo '<option value="'.$row['MaTinhTP'].'">'.$row['TenTinhTP'].'</option>';
                            };
                        ?>
					</select>
            </div>
            <div class="field-row">
            	<label for="cars">Quận huyện (*)</label>
					<select name="quanhuyen" required id="quanHuyen" class="form-control">
                        <?php
                            $getQH = "SELECT * FROM `quanhuyen` WHERE MaQuanHuyen='".$b['MaQuanHuyen']."'";
                            $c = mysqli_query($conn, $getQH);
                            $d = mysqli_fetch_array($c);
                            echo '<option value="'.$d['MaQuanHuyen'].'">'.$d['TenQuanHuyen'].'</option>';
                            $getQH = "SELECT * FROM `quanhuyen` INNER JOIN (SELECT MaTinhTP from `quanhuyen` WHERE MaQuanHuyen = '".$b['MaQuanHuyen']."') as t on quanhuyen.MaTinhTP = t.MaTinhTP";
                            $result = $conn->query($getQH);
                            while($row = $result->fetch_assoc()){
                                echo '<option value="'.$row['MaQuanHuyen'].'">'.$row['TenQuanHuyen'].'</option>';
                            };
                        ?>
					</select>
            </div>
            <div class="buttons-holder" style="margin-top:10px"> 
                <button type="submit" name="btn-sumbit" class="le-button huge">Đồng ý</button>
            </div>
        </form>
	</div>
            <?php
                if(isset($_POST['btn-sumbit'])){
                    if($_FILES["image"]["type"]=="image/jpeg"||$_FILES["image"]["type"]=="image/png"||$_FILES["image"]["type"]=="image/gif"){
                        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                        $newName = $b['Anh'];
                        $path = "assets/images/products/"; // file luu vào thu muc chua file upload
                        $originalDir = $path . $newName;
                        $tmp_name = $_FILES['image']['tmp_name'];
                        // upload database
                        $sql = "UPDATE `mathang` SET `TenHang`='".$_POST['tenhang']."', `TinhTrang`='".$_POST['tinhtrang']."', `GiaBan`='".$_POST['giaban']."', `Anh`='".$newName."', `MoTa`='".$_POST['mota']."', `MaDanhMuc`=".$_POST['danhmuc'].", `MaQuanHuyen`='".$_POST['quanhuyen']."', `MaTaiKhoan`=".$id.", `MaCuaHang`='' WHERE MaHang=".$b['MaHang'];
                        if (mysqli_query($conn, $sql)){
                            // Upload file
                            move_uploaded_file($tmp_name,$originalDir);

                            echo '<script language="javascript">';
                            echo 'alert("Đã sửa!");';
                            echo 'location.replace("http://localhost/CDIO3/list-product.php?id='.$id.'");';
                            echo '</script>';
                        }
                    }
                    else{
                        echo '<script type="text/javascript">
                             err.innerHTML = "Hình ảnh không đúng định dạng!";
                             err.style.color = "red";
                             </script>';
                    }
                }
            ?>