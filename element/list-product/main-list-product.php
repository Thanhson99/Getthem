<?php
//connect database
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
?>
<div class="container">
    <h1 class = "tieude">Danh Sách Hàng</h1>
    <?php 
        $getData = "SELECT * FROM `mathang` WHERE MaTaiKhoan=".$id;
        $result = $conn->query($getData);
        while($row = $result->fetch_assoc()){
            echo '<form action="" method="POST">
                    <div class="single-el">
                    <input class="hidden" name="mahang" type="text" value="'.$row['MaHang'].'">
                        <img src="assets/images/products/'.$row['Anh'].'" alt="anh san pham">
                        <div class="info-el">
                            <h1 name="tenhang" id ="tenHang">'.$row['TenHang'].'<span id="daban'.$row['MaHang'].'"></span></h1>
                            <b>Tình trạng: </b><p id = "tinhTrang">'.$row['TinhTrang'].'</p>
                            <b>Giá: </b><p id = "gia">'.$row['GiaBan'].'<span>VNĐ</span></p>
                            <b>Mô tả: </b><p id = "moTa">'.$row['MoTa'].'</p>
                        </div>
                        <div class ="option">
                            <button type="submit" name="btnSubmit" class="le-button" value="edit">Sửa</button>
                            <button onclick="show()" type="button" name="btnSubmit" class= "le-button">Xóa</button>
                            <button onclick="daban('.$row['MaHang'].')" type="button" name="btnSubmit" class= "le-button">Đã Bán</button>
                        </div>
                    </div>
                    <div class="confirm" id = "confirm-area" onclick = "hide(this)">
                        <div class = "main-conf">
                                <p>Bạn có thực sự muốn xóa không?</p>
                                <div class="button-submit">
                                    <button name="btnSubmit" type="submit" class= "le-button" value="delete">Có</button>
                                    <input name="no" type="submit" class= "le-button" value="Không">
                                </div>
                        </div>
                    </div>
                </form>';
        };
    ?>
</div>
<?php
    if (isset($_POST['btnSubmit'])){
        if($_POST['btnSubmit'] == 'edit'){
            echo '<script language="javascript">
                    location.replace("http://localhost/CDIO3/edit-single-sale.php?id='.$id.'&mh='.$_POST['mahang'].'");
                 </script>';
        }
        if($_POST['btnSubmit'] == 'delete'){   
            $sql = "DELETE FROM `mathang` WHERE MaHang=".$_POST['mahang'];
            if (mysqli_query($conn, $sql)){
                echo '<script language="javascript">';
                echo 'alert("Đã Xóa!");';
                echo 'location.replace("http://localhost/CDIO3/list-product.php?id='.$id.'");';
                echo '</script>';
            }
        }
    }
?>