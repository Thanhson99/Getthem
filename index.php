<?php include 'element/index/meta-index.php';
    phpinfo();
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

    include 'element/index/list-index.php';
    include 'element/index/main-index.php';
    include 'element/index/section-index-thuonghieu.php';
    include 'element/footer.php';
    include 'element/index/script-index.php';
?>