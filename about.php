<?php 
    include 'element/about/meta-about.php';
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

    include 'element/header-drop-down-menu.php';
    include 'element/about/main-about.php';
    include 'element/table-grid.php';
    include 'element/footer.php';
    include 'element/about/script-about.php';
?>