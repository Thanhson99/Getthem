<?php 
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
?>
        <footer id="footer" class="color-bg">
            <div class="container">
                <div class="row no-margin widgets-row">
                    <div class="col-xs-12  col-sm-4 no-margin-left">
                        <div class="widget">
                            <h2>Nổi Bật</h2>
                            <div class="body">
                                <ul>
                        <?php 
                            $sql = "SELECT `MaHang`, `TenHang`, `TinhTrang`, MAX(`GiaBan`) as GiaBan, `Anh`, `MoTa`, `MaDanhMuc`, `MaQuanHuyen`, `MaTaiKhoan`, `MaCuaHang` FROM `mathang` GROUP BY MaDanhMuc";
                                    
                            $a = mysqli_query($conn, $sql);
                            $b = mysqli_fetch_array($a);
                            $result = $conn->query($sql);
                            $count = 0;
                            while($row = $result->fetch_assoc()){
                                if ($count == 3) {
                                    break;
                                }
                                $count++;
                                echo '<li>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-9 no-margin">
                                                <a href="single-product.php?id='.$id.'&mh='.$row['MaHang'].'">'.$row['TenHang'].'</a>
                                                <div class="price">
                                                    <div class="price-current">'.$row['GiaBan'].'  VNĐ</div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3 no-margin">
                                                <a href="#" class="thumb-holder">
                                                    <img alt="" src="assets/images/products/'.$row['Anh'].'">
                                                </a>
                                            </div>
                                        </div>
                                    </li>';
                            }
                        ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 ">
                        <div class="widget">
                            <h2>Khuyến Mãi</h2>
                            <div class="body">
                                <ul>
                                    <?php 
                            $sql = "SELECT `MaHang`, `TenHang`, `TinhTrang`, `GiaBan`, `Anh`, `MoTa`, `MaDanhMuc`, `MaQuanHuyen`, `MaTaiKhoan`, `MaCuaHang` FROM `mathang`";
                                    
                            $a = mysqli_query($conn, $sql);
                            $b = mysqli_fetch_array($a);
                            $result = $conn->query($sql);
                            $count = 0;
                            while($row = $result->fetch_assoc()){
                                if ($count == 3) {
                                    break;
                                }
                                $count++;
                                echo '<li>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-9 no-margin">
                                                <a href="single-product.php?id='.$id.'&mh='.$row['MaHang'].'">'.$row['TenHang'].'</a>
                                                <div class="price">
                                                    <div class="price-current">'.$row['GiaBan'].'  VNĐ</div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3 no-margin">
                                                <a href="#" class="thumb-holder">
                                                    <img alt="" src="assets/images/products/'.$row['Anh'].'">
                                                </a>
                                            </div>
                                        </div>
                                    </li>';
                            }
                        ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 ">
                        <div class="widget">
                            <h2>Bán Chạy</h2>
                            <div class="body">
                                <ul>
                                    <?php 
                            $sql = "SELECT `MaHang`, `TenHang`, `TinhTrang`, `GiaBan`, `Anh`, `MoTa`, `MaDanhMuc`, `MaQuanHuyen`, `MaTaiKhoan`, `MaCuaHang` FROM `mathang` WHERE TinhTrang='Mới 100%'";
                                    
                            $a = mysqli_query($conn, $sql);
                            $b = mysqli_fetch_array($a);
                            $result = $conn->query($sql);
                            $count = 0;
                            while($row = $result->fetch_assoc()){
                                if ($count == 3) {
                                    break;
                                }
                                $count++;
                                echo '<li>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-9 no-margin">
                                                <a href="single-product.php?id='.$id.'&mh='.$row['MaHang'].'">'.$row['TenHang'].'</a>
                                                <div class="price">
                                                    <div class="price-current">'.$row['GiaBan'].'  VNĐ</div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3 no-margin">
                                                <a href="#" class="thumb-holder">
                                                    <img alt="" src="assets/images/products/'.$row['Anh'].'">
                                                </a>
                                            </div>
                                        </div>
                                    </li>';
                            }
                        ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>