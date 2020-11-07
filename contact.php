<?php include 'element/contract/meta-contract.php'?>
<?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        include 'element/header-login.php';
    }else{
        include 'element/header-no-login.php';
    }
?>
<?php include 'element/contract/main-contract.php'?>    
<?php include 'element/footer.php'?>
<?php include 'element/contract/script-contract.php'?>