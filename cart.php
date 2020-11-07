<?php include 'element/cart/meta-cart.php';
    
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

    include 'element/cart/main-cart.php';
    include 'element/table-grid.php';
    include 'element/footer.php';
    include 'element/cart/script-cart.php';
?>