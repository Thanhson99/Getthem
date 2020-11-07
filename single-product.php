<?php include 'element/product/meta-product.php';
    
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

    //connect database
    $servername = "localhost";
    $database = "getthem";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
    }


    include 'element/header-drop-down-menu.php';
    include 'element/product/main-product.php';
    include 'element/product/section-product.php';
    include 'element/table-grid.php';
    include 'element/footer.php';
    include 'element/product/script-product.php';
?>