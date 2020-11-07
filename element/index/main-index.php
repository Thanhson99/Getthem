<section id="banner-holder" class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
    <div class="container">
        <div class="col-xs-12 col-lg-6 no-margin banner">
            <a href="#products-tab">
            <img class="banner-image" alt="" src="assets/images/banners/banner-narrow-01.jpg">
        </a>
    </div>
    <div class="col-xs-12 col-lg-6 no-margin text-right banner">
       <a href="#products-tab">
        <img class="banner-image" alt="" src="assets/images/banners/banner-narrow-01.jpg">
    </a>
</div>
</div>
</section>
<div id="products-tab" class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
    <div class="container">
        <div class="tab-holder">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#featured" data-toggle="tab">nổi bật</a></li>
                <li><a href="#new-arrivals" data-toggle="tab">vừa đăng</a></li>
                <li><a href="#top-sales" data-toggle="tab">mua nhiều</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="featured">
                    <div class="product-grid-holder">
                        <?php 
                            $sql = "SELECT `MaHang`, `TenHang`, `TinhTrang`, MAX(`GiaBan`) as GiaBan, `Anh`, `MoTa`, `MaDanhMuc`, `MaQuanHuyen`, `MaTaiKhoan`, `MaCuaHang` FROM `mathang` GROUP BY MaDanhMuc";
                                    
                            $a = mysqli_query($conn, $sql);
                            $b = mysqli_fetch_array($a);
                            $result = $conn->query($sql);
                            $count = 0;
                            while($row = $result->fetch_assoc()){
                                if ($count == 4) {
                                    break;
                                }
                                $count++;
                                $emailNgBan = "SELECT `Email` FROM `taikhoan` WHERE MaTK=" . $row['MaTaiKhoan'];
                                $e = mysqli_query($conn, $emailNgBan);
                                $f = mysqli_fetch_array($e);
                                $tenNgBan = "SELECT `HoTen` FROM `canhan` WHERE Email='" . $f['Email']."'";
                                $g = mysqli_query($conn, $tenNgBan);
                                $h = mysqli_fetch_array($g);
                                echo '<div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="image">
                                                <img alt="" src="assets/images/products/'.$row['Anh'].'">
                                            </div>
                                            <div class="body">
                                                <div class="title">
                                                    <a href="single-product.php?id='.$id.'&mh='.$row['MaHang'].'">'.$row['TenHang'].'</a>
                                                </div>
                                                <div class="brand">'.$row['TinhTrang'].'</div>
                                                <div class="ngban">Người bán: '.$h['HoTen'].'</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-current pull-right">'.$row['GiaBan'].'  VNĐ</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a class="le-button" href="single-product.php?id='.$id.'&mh='.$row['MaHang'].'">thêm vào giỏ</a>
                                                </div>
                                                <div class="wish-Trao đổi">
                                                    <a class="btn-add-to-wishlist" href="#">Yêu thích</a>
                                                    <a class="btn-add-to-Trao đổi" href="#">Trao đổi</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                            }
                        ?>
                </div>
                <div class="loadmore-holder text-center">
                    <a class="btn-loadmore" href="#">
                        <i class="fa fa-plus"></i>
                        hiển thị thêm
                    </a>
                </div>
            </div>
            <div class="tab-pane" id="new-arrivals">
                <div class="product-grid-holder">
                    <?php 
                            $sql = "SELECT `MaHang`, `TenHang`, `TinhTrang`, `GiaBan`, `Anh`, `MoTa`, `MaDanhMuc`, `MaQuanHuyen`, `MaTaiKhoan`, `MaCuaHang` FROM `mathang`";
                                    
                            $a = mysqli_query($conn, $sql);
                            $b = mysqli_fetch_array($a);
                            $result = $conn->query($sql);
                            $count = 0;
                            while($row = $result->fetch_assoc()){
                                if ($count == 4) {
                                    break;
                                }
                                $count++;
                                $emailNgBan = "SELECT `Email` FROM `taikhoan` WHERE MaTK=" . $row['MaTaiKhoan'];
                                $e = mysqli_query($conn, $emailNgBan);
                                $f = mysqli_fetch_array($e);
                                $tenNgBan = "SELECT `HoTen` FROM `canhan` WHERE Email='" . $f['Email']."'";
                                $g = mysqli_query($conn, $tenNgBan);
                                $h = mysqli_fetch_array($g);
                                echo '<div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="image">
                                                <img alt="" src="assets/images/products/'.$row['Anh'].'">
                                            </div>
                                            <div class="body">
                                                <div class="title">
                                                    <a href="single-product.php?id='.$id.'&mh='.$row['MaHang'].'">'.$row['TenHang'].'</a>
                                                </div>
                                                <div class="brand">'.$row['TinhTrang'].'</div>
                                                <div class="ngban">Người bán: '.$h['HoTen'].'</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-current pull-right">'.$row['GiaBan'].'  VNĐ</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a class="le-button" href="single-product.php?id='.$id.'&mh='.$row['MaHang'].'">thêm vào giỏ</a>
                                                </div>
                                                <div class="wish-Trao đổi">
                                                    <a class="btn-add-to-wishlist" href="#">Yêu thích</a>
                                                    <a class="btn-add-to-Trao đổi" href="#">Trao đổi</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                            }
                        ?>
            </div>
            <div class="loadmore-holder text-center">
                <a class="btn-loadmore" href="#">
                    <i class="fa fa-plus"></i>
                    Hiển thị thêm
                </a>
            </div>
        </div>
        <div class="tab-pane" id="top-sales">
            <div class="product-grid-holder">
                <?php 
                            $sql = "SELECT `MaHang`, `TenHang`, `TinhTrang`, `GiaBan`, `Anh`, `MoTa`, `MaDanhMuc`, `MaQuanHuyen`, `MaTaiKhoan`, `MaCuaHang` FROM `mathang` WHERE TinhTrang='Mới 100%'";
                                    
                            $a = mysqli_query($conn, $sql);
                            $b = mysqli_fetch_array($a);
                            $result = $conn->query($sql);
                            $count = 0;
                            while($row = $result->fetch_assoc()){
                                if ($count == 4) {
                                    break;
                                }
                                $count++;
                                $emailNgBan = "SELECT `Email` FROM `taikhoan` WHERE MaTK=" . $row['MaTaiKhoan'];
                                $e = mysqli_query($conn, $emailNgBan);
                                $f = mysqli_fetch_array($e);
                                $tenNgBan = "SELECT `HoTen` FROM `canhan` WHERE Email='" . $f['Email']."'";
                                $g = mysqli_query($conn, $tenNgBan);
                                $h = mysqli_fetch_array($g);
                                echo '<div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="image">
                                                <img alt="" src="assets/images/products/'.$row['Anh'].'">
                                            </div>
                                            <div class="body">
                                                <div class="title">
                                                    <a href="single-product.php?id='.$id.'&mh='.$row['MaHang'].'">'.$row['TenHang'].'</a>
                                                </div>
                                                <div class="brand">'.$row['TinhTrang'].'</div>
                                                <div class="ngban">Người bán: '.$h['HoTen'].'</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-current pull-right">'.$row['GiaBan'].'  VNĐ</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a class="le-button" href="single-product.php?id='.$id.'&mh='.$row['MaHang'].'">thêm vào giỏ</a>
                                                </div>
                                                <div class="wish-Trao đổi">
                                                    <a class="btn-add-to-wishlist" href="#">Yêu thích</a>
                                                    <a class="btn-add-to-Trao đổi" href="#">Trao đổi</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                            }
                        ?>
        </div>
        <div class="loadmore-holder text-center">
            <a class="btn-loadmore" href="#">
                <i class="fa fa-plus"></i>
                hiển thị thêm
            </a>
        </div>
    </div>
</div>
</div>
</div>
</div>
<section id="bestsellers" class="color-bg wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
    <div class="container">
        <h1 class="section-title">Bán Chạy</h1>
        <div class="product-grid-holder medium">
            <div class="col-xs-12 col-md-7 no-margin">
                <div class="row no-margin">
                    <?php 
                            $sql = "SELECT `MaHang`, `TenHang`, `TinhTrang`, MAX(`GiaBan`) as GiaBan, `Anh`, `MoTa`, `MaDanhMuc`, `MaQuanHuyen`, `MaTaiKhoan`, `MaCuaHang` FROM `mathang` GROUP BY MaDanhMuc";
                                    
                            $a = mysqli_query($conn, $sql);
                            $b = mysqli_fetch_array($a);
                            $result = $conn->query($sql);
                            $count = 0;
                            while($row = $result->fetch_assoc()){
                                if ($count == 9) {
                                    break;
                                }
                                $count++;
                                $emailNgBan = "SELECT `Email` FROM `taikhoan` WHERE MaTK=" . $row['MaTaiKhoan'];
                                $e = mysqli_query($conn, $emailNgBan);
                                $f = mysqli_fetch_array($e);
                                $tenNgBan = "SELECT `HoTen` FROM `canhan` WHERE Email='" . $f['Email']."'";
                                $g = mysqli_query($conn, $tenNgBan);
                                $h = mysqli_fetch_array($g);
                                echo '<div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                                        <div class="product-item">
                                            <div class="image">
                                                <img alt="" src="assets/images/products/'.$row['Anh'].'">
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.php?id='.$id.'&mh='.$row['MaHang'].'">'.$row['TenHang'].'</a>
                                                </div>
                                                <div class="brand">'.$row['TinhTrang'].'</div>
                                                <div class="ngban">Người bán: '.$h['HoTen'].'</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-current text-right">'.$row['GiaBan'].'  VNĐ</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                   <a class="le-button" href="single-product.php?id='.$id.'&mh='.$row['MaHang'].'">thêm vào giỏ</a>
                                                </div>
                                                <div class="wish-Trao đổi">
                                                    <a class="btn-add-to-wishlist" href="#">Yêu thích</a>
                                                    <a class="btn-add-to-Trao đổi" href="#">Trao đổi</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                            }
                        ?>
                    
                </div>
            </div>
            <div class="col-xs-12 col-md-5 no-margin">
                <div class="product-item-holder size-big single-product-gallery small-gallery">
                    <div id="best-seller-single-product-slider" class="single-product-slider owl-carousel owl-theme" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer">
                            <div class="owl-wrapper" style="width: 2922px; left: 0px; display: block;">
                                <div class="owl-item" style="width: 487px;">
                                    <div class="single-product-gallery-item" id="slide1">
                                        <?php echo '<a data-rel="prettyphoto" href="single-product.php?id='.$id.'&mh=64">'?>
                                            <img alt="" src="assets/images/products/1594009721.jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div class="label-discount clear"></div>
                        <div class="title">
                            <?php echo '<a href="single-product.php?id='.$id.'&mh=64">'?>CPU intel core i5-4670k 3.4GHz BOX B82-12-122-41</a>
                        </div>
                        <div class="brand">sony</div>
                    </div>
                    <div class="prices text-right">
                        <div class="price-current inline">23.000.000 vnđ</div>
                        <?php echo '<a href="single-product.php?id='.$id.'&mh=64" class="le-button btn-default big inline">'?>thêm vào giỏ</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section id="recently-reviewd" class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
    <div class="container">
        <div class="carousel-holder hover">
            <div class="title-nav">
                <h2 class="h1">Sản Phẩm Đã Xem</h2>
                <div class="nav-holder">
                    <a href="#prev" data-target="#owl-recently-viewed" class="slider-prev btn-prev fa fa-angle-left"></a>
                    <a href="#next" data-target="#owl-recently-viewed" class="slider-next btn-next fa fa-angle-right"></a>
                </div>
            </div>
            <div class="owl-carousel product-grid-holder owl-theme" style="opacity: 1; display: block;">
                <div class="owl-wrapper-outer">
                    <div class="owl-wrapper" style="width: 3120px; left: 0px; display: block;">
                        <?php 
                            $sql = "SELECT `MaHang`, `TenHang`, `TinhTrang`, `GiaBan`, `Anh`, `MoTa`, `MaDanhMuc`, `MaQuanHuyen`, `MaTaiKhoan`, `MaCuaHang` FROM `mathang`";
                                    
                            $a = mysqli_query($conn, $sql);
                            $b = mysqli_fetch_array($a);
                            $result = $conn->query($sql);
                            $count = 0;
                            while($row = $result->fetch_assoc()){
                                if ($count == 9) {
                                    break;
                                }
                                $count++;
                                $emailNgBan = "SELECT `Email` FROM `taikhoan` WHERE MaTK=" . $row['MaTaiKhoan'];
                                $e = mysqli_query($conn, $emailNgBan);
                                $f = mysqli_fetch_array($e);
                                $tenNgBan = "SELECT `HoTen` FROM `canhan` WHERE Email='" . $f['Email']."'";
                                $g = mysqli_query($conn, $tenNgBan);
                                $h = mysqli_fetch_array($g);
                                echo ' <div class="owl-item" style="width: 195px;">
                                            <div class="no-margin carousel-item product-item-holder size-small hover">
                                                <div class="product-item">
                                                    <div class="image">
                                                        <img alt="" src="assets/images/products/'.$row['Anh'].'">
                                                    </div>
                                                    <div class="body">
                                                        <div class="title">
                                                            <a href="single-product.php?id='.$id.'&mh='.$row['MaHang'].'">'.$row['TenHang'].'</a>
                                                        </div>
                                                        <div class="brand">'.$row['TinhTrang'].'</div>
                                                        <!--<div class="ngban">Người bán: '.$h['HoTen'].'</div>-->
                                                    </div>
                                                    <div class="prices">
                                                        <div class="price-current text-right">'.$row['GiaBan'].'  VNĐ</div>
                                                    </div>
                                                    <div class="hover-area">
                                                        <div class="add-cart-button">
                                                            <a href="single-product.php?id='.$id.'&mh='.$row['MaHang'].'" class="le-button btn-add-dx">thêm vào giỏ</a>
                                                        </div>
                                                        <div class="wish-Trao đổi">
                                                            <a class="btn-add-to-wishlist" href="#">Yêu thích</a>
                                                            <a class="btn-add-to-Trao đổi" href="#">Trao đổi</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>