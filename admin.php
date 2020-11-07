<?php 
	include 'element/admin/meta-admin.php';
	if(!isset($_GET['check'])){
		include 'element/admin/login-admin.php';
	}else{
		include 'element/admin/main-admin.php';				
	}
    include 'element/admin/script-admin.php';
?>