<?php

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
?>
<?php include 'element/authencation/meta-authencation.php'?>
<?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        include 'element/header-login.php';
    }else{
        include 'element/header-no-login.php';
    }
?>

<?php include 'element/authencation/main-authencation.php'?>
<?php include 'element/footer.php'?>
<?php include 'element/authencation/script-authencation.php'?>