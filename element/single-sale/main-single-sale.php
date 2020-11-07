	<div class="container" style = "margin-top: 50px;">
		<form role="form" method="post" class="login-form cf-style-1" enctype="multipart/form-data">
            <div class="field-row">
                <label>Tên hàng (*)</label>
                <input name="tenhang" id="tenHang" required type="text" placeholder="Nhập tên hàng" class="le-input">
            </div>
            <div class="field-row">
                <label>Tình trạng (*)</label>
                <input name="tinhtrang" id="tinhTrang" required type="text" placeholder="Tình trạng hàng" class="le-input">
            </div>
            <div class="field-row">
                <label>Giá bán (*)</label>
                <input name="giaban" id="giaBan" required type="number" placeholder="VNĐ" class="le-input">
            </div>
            <div class="field-row">
                <label>Chọn ảnh (*)</label>
				<input required="" name="image" type="file" onchange="previewFile()" id="id_file_name">
				<img id="anhHang" src="#" alt="ảnh sản phẩm" style = "display: none">
                <span id="err"></span>
            </div>
            <div class="field-row">
                <label>Mô tả (*)</label>
                 <textarea name="mota" id="moTa" required class="le-input" cols="22" rows="8"></textarea>
            </div>
            <div class="field-row">
            	<label for="cars">Danh mục (*)</label>
					<select name="danhmuc" required id="danhMuc" class="form-control">
                        <?php
                            if(isset($_GET['dm'])){
                                $getDanhMuc = "SELECT * FROM `danhmuc` WHERE MaDanhMuc='" .$_GET['dm']. "'";
                                $c = mysqli_query($conn, $getDanhMuc);
                                $d = mysqli_fetch_array($c);
                                echo '<option value="'.$d['MaDanhMuc'].'">'.$d['TenDanhMuc'].'</option>';
                            }
                            $getDanhMuc = "SELECT * FROM `danhmuc`";
                            // $c = mysqli_query($conn, $checkEmail);
                            // $d = mysqli_fetch_array($c);
                            $result = $conn->query($getDanhMuc);
                            while($row = $result->fetch_assoc()){
                                if($row['MaDanhMuc'] == $_GET['dm']){
                                    //
                                }else{
                                    echo '<option value="'.$row['MaDanhMuc'].'">'.$row['TenDanhMuc'].'</option>';
                                }
                            };
                        ?>
					</select>
            </div>
            <div class="field-row">
            	<label for="cars">Tỉnh thành phố (*)</label>
					<select name="tinhtp" required id="tinhTP" class="form-control">
                      <?php 
                            if(isset($_GET['mtp'])){
                                $getTP = "SELECT * FROM `tinhtp` WHERE MaTinhTP='" .$_GET['mtp']. "'";
                                $c = mysqli_query($conn, $getTP);
                                $d = mysqli_fetch_array($c);
                                echo '<option value="'.$d['MaTinhTP'].'">'.$d['TenTinhTP'].'</option>';
                            }else{
                                echo '<option value="0">Chọn thành phố</option>';
                            }
                            $getTP = "SELECT * FROM `tinhtp`";
                            // $c = mysqli_query($conn, $checkEmail);
                            // $d = mysqli_fetch_array($c);
                            $result = $conn->query($getTP);
                            while($row = $result->fetch_assoc()){
                                if($row['MaTinhTP'] == $_GET['mtp']){
                                    //
                                }else{
                                    echo '<option value="'.$row['MaTinhTP'].'">'.$row['TenTinhTP'].'</option>';
                                }
                            };
                        ?>
					</select>
            </div>
            <div class="field-row">
            	<label for="cars">Quận huyện (*)</label>
					<select name="quanhuyen" required id="quanHuyen" class="form-control">
					</select>
            </div>
            <div class="buttons-holder" style="margin-top:10px"> 
                <button type="submit" name="btn-sumbit" class="le-button huge">Đăng bán</button>
            </div>
        </form>
	</div>
            <?php
                if(isset($_POST['btn-sumbit'])){
                    if($_FILES["image"]["type"]=="image/jpeg"||$_FILES["image"]["type"]=="image/png"||$_FILES["image"]["type"]=="image/gif"){
                        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                        $newName = time() . '.' . $ext;
                        $path = "assets/images/products/"; // file luu vào thu muc chua file upload
                        $originalDir = $path . $newName;
                        $tmp_name = $_FILES['image']['tmp_name'];
                        // upload database
                        $sql = "INSERT INTO `mathang`(`MaHang`, `TenHang`, `TinhTrang`, `GiaBan`, `Anh`, `MoTa`, `MaDanhMuc`, `MaQuanHuyen`, `MaTaiKhoan`, `MaCuaHang`) VALUES ('','".$_POST['tenhang']."','".$_POST['tinhtrang']."','".$_POST['giaban']."','".$newName."','".$_POST['mota']."',".$_POST['danhmuc'].",'".$_POST['quanhuyen']."',".$id.",'')";
                        if (mysqli_query($conn, $sql)){
                            // Upload file
                            move_uploaded_file($tmp_name,$originalDir);

                            echo '<script language="javascript">';
                            echo 'alert("Đăng bán thành công")';
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