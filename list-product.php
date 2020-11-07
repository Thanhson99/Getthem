<?php include 'element/list-product/meta-list-product.php';
    
// check login
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        if($id == 0)
            include 'element/header-no-login.php';
        else
            include 'element/header-login.php';
    }else{
        $id=0;
        include 'element/header-no-login.php';
    }

    include 'element/list-product/main-list-product.php';
    include 'element/footer.php';
    include 'element/list-product/script-list-product.php';
?>