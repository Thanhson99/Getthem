<div class="container" style="text-align: center;">
	<form action="" method="POST">
		<div class="row">
			<h1>ADMIN</h1>
		</div>
		<div class="row">
			<span id="checklogin"></span>
		</div>
		<div class="row">
			<span>Tài khoản</span>
			<input name="taikhoan" type="text" required="" placeholder="Nhập tài khoản">
		</div>
		<div class="row">
			<span>Mật Khẩu</span>
			<input name="matkhau" type="password" required="" placeholder="Nhập mật khẩu">
		</div>
		<button name="submit" class="le-button" type="submit">Đăng nhập</button>
	</form>
</div>
<?php 
	if(isset($_POST['submit'])){
		if($_POST['taikhoan'] == 'admin' && $_POST['matkhau'] == '123456'){
			header('location: http://localhost/CDIO3/admin.php?check=true');
		}else{
			echo '<script>document.getElementById("checklogin").innerHTML = "Tài khoản hoặc mật khẩu sai";document.getElementById("checklogin").style.color = "red";</script>';
		}
	}
?>