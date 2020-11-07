<?php 
	$getAccount = "SELECT * FROM `canhan` WHERE MaCaNhan=".$id;                           
    $c = mysqli_query($conn, $getAccount);
    $d = mysqli_fetch_array($c);

    $getPassword = "SELECT `Password` FROM `taikhoan` WHERE MaTK=".$id;
    $e =  mysqli_query($conn, $getPassword);
    $f = mysqli_fetch_array($e);
?>
<section class="main">
	<div class="container">
		<div class="header">
			<h1>Quản lý tài khoản</h1>
		</div>
		<div class="info" style="display: flex;">
			<p>Thông tin cá nhân</p>
			<button onclick="editProfile()" class="le-button edit">Chỉnh sửa</button>
		</div>
		<div>
			<span id="alert"></span>
		</div>
		<div class="profile" id="profile">
			<div id="name"><span>Tên:</span> <?php echo $d['HoTen']?></div>
			<div id="email"><span>Email:</span> <?php echo $d['Email']?></div>
			<div id="pass"><span>Mật Khẩu:</span> <span class="hidepass">*****</span></i></div>
			<div id="phoneNumber"><span>SDT:</span> <?php echo $d['SDT']?></div>
			<div id="sex"><span>Giới Tính:</span> <?php echo $d['GioiTinh']?></div>
			<div id="birth"><span>Ngày Sinh:</span> <?php echo $d['Ngay'] . '/' . $d['Thang'] . '/' . $d['Nam']?></div>
			<div id="adress"><span>Địa Chỉ:</span> <?php echo $d['DiaChi']?></div>
		</div>
		<form action="" method="POST">
			<div id="edit_profile" class="edit_profile" style="display: none;">
				<div class="row">
					<div class="col-left">
						<p class="title">Họ Tên: </p>
						<input type="text" name="frname" required="" value="<?php echo $d['HoTen']?>">
						<div class="field-row">
							<span id="showText"></span>
						</div>
						<p class="title">Email: </p>
						<input onchange="checkEmail()" required="" name="fremail" type="text" id="fremail" value="<?php echo $d['Email']?>">
						<p class="title">Mật Khẩu: </p>
						<input type="text" name="frpass" required="" value="<?php echo $f['Password']?>">
						<p class="title">SDT: </p>
						<input type="text" required="" name="frphoneNumber" value="<?php echo $d['SDT']?>">
					</div>
					<div class="col-right">
						<p class="title">Giới Tính: </p>
						<span class="radio-group" data-type="radio">
							<?php 
								if($d['GioiTinh'] == 'Nam'){
									echo '<span class="radio-group" data-type="radio">
	                                        <span class="rd">
	                                            <input id="male" checked type="radio" name="sex" value="1" required="">
	                                            <span>Nam</span>
	                                        </span>
	                                        <span class="rd">
	                                            <input id="female" type="radio" name="sex" value="0">
	                                            <span>Nữ</span>
	                                        </span>
	                                    </span>';
								}else{
									echo '<span class="radio-group" data-type="radio">
	                                        <span class="rd">
	                                            <input id="male" type="radio" name="sex" value="1" required="">
	                                            <span>Nam</span>
	                                        </span>
	                                        <span class="rd">
	                                            <input id="female" checked type="radio" name="sex" value="0">
	                                            <span>Nữ</span>
	                                        </span>
	                                    </span>';
								}
							 ?>
	                    </span>	
						<p class="title">Ngày Sinh: </p>
			 			<input type="text" required="" name="date" id="date" value="<?php echo $d['Ngay'] . '/' . $d['Thang'].'/'.$d['Nam']?>">
						<p class="title">Địa Chỉ: </p>
						<textarea name="fraddress" id="" cols="30" rows="5"><?php echo $d['DiaChi']?></textarea>
					</div>
				</div>
				<button type="submit" class="le-button" id="Save">Save</button>
			</div>
		</form>
	</div>
</section>
<?php
	if(!empty($_POST['fremail']) && !empty($_POST['frpass'])){
		if($_POST['sex']){
			$sex = 'Nam';
		}else{
			$sex = 'Nữ';
		}
		$date = explode("/", $_POST['date']);
		$day = $date[0];
		$month = $date[1];
		$year = $date[2];

		$updateTK = "UPDATE `taikhoan` SET `MaTK`=".$id.",`Email`='".$_POST['fremail']."',`Password`='".$_POST['frpass'] . "' WHERE MaTK=".$id;
		$updateCN = "UPDATE `canhan` SET `MaCaNhan`=".$id.",`HoTen`='".$_POST['frname']."',`GioiTinh`='".$sex."',`Ngay`=".$day.",`Thang`=".$month.",`Nam`=".$year.",`Email`='".$_POST['fremail']."',`SDT`=".$_POST['frphoneNumber'].",`DiaChi`='".$_POST['fraddress']."' WHERE MaCaNhan=".$id;
		if(mysqli_query($conn, $updateTK) && mysqli_query($conn, $updateCN)) {
            echo '<script language="javascript">
            		location.replace("http://localhost/CDIO3/customer-account.php?id='.$id.'");
            		alert("Chỉnh sửa thông tin thành công");
            	 </script>';
        }
	}
?>