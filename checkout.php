<?php 
    include 'element/checkout/meta-checkout.php';
    
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

    include 'element/checkout/main-checkout.php';
    include 'element/table-grid.php';
    include 'element/footer.php';
    include 'element/checkout/script-checkout.php';
?> 