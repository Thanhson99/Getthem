<?php include 'element/terms/meta-terms.php';
    
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
    include 'element/terms/main-terms.php';
    include 'element/table-grid.php';
    include 'element/footer.php';
    include 'element/terms/script-terms.php';
?>