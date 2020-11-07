<?php include 'element/category/meta-category.php';

// check login
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        include 'element/header-login.php';
    }else{
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
    include 'element/category/main-category.php';
    include 'element/category/section-category.php';
    include 'element/table-grid.php';
    include 'element/footer.php';
    include 'element/category/script-category.php';
?>