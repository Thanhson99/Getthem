<option value="">Chọn quận huyện</option>
<?php
	$servername = "localhost";
    $database = "id11071958_database";
    $username = "id11071958_thanhson99";
    $password = "Lsl{9AOf*{nD3ItU";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
    }
    $getQH = "SELECT * FROM `quanhuyen` WHERE MaTinhTP='" . $_POST['idTinhTP'] . "'";
    $result = $conn->query($getQH);
    while($row = $result->fetch_assoc()){
        echo '<option value="'.$row['MaQuanHuyen'].'">'.$row['TenQuanHuyen'].'</option>';
    };
?>