<?php $madm = $_GET['madm'];

$mathang = "SELECT * FROM `mathang` WHERE MaDanhMuc=" . $madm;
$c = mysqli_query($conn, $mathang);
$d = mysqli_fetch_array($c);
$result1 = $conn->query($mathang);
$result2 = $conn->query($mathang);

?>
<div class="col-xs-12 col-sm-9 no-margin wide sidebar">
    <div id="grid-page-banner">
        <a href="#">
            <img src="assets/images/banners/banner-narrow-01.jpg" alt="" />
        </a>
    </div>
    <section id="gaming">
        <div class="grid-list-products">
            <h2 class="section-title">Gaming</h2>
            <div class="control-bar">
                <div id="popularity-sort" class="le-select">
                    <select data-placeholder="sort by popularity">
                        <option value="1">1-100 người chơi</option>
                        <option value="2">101-200 người chơi</option>
                        <option value="3">200+ người chơi</option>
                    </select>
                </div>
                <div id="item-count" class="le-select">
                    <select>
                        <option value="1">24/trang</option>
                        <option value="2">32/trang</option>
                        <option value="3">48/trang</option>
                    </select>
                </div>
                <div class="grid-list-buttons">
                    <ul>
                        <li class="grid-list-button-item active"><a data-toggle="tab" href="#grid-view"><i class="fa fa-th-large"></i> Lưới</a></li>
                        <li class="grid-list-button-item "><a data-toggle="tab" href="#list-view"><i class="fa fa-th-list"></i> Danh sách</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="grid-view" class="products-grid fade tab-pane in active">
                    <div class="product-grid-holder">
                        <div class="row no-margin">
                            <!-- //////////////////////////////// -->
                            <?php
                            while($row = $result1->fetch_assoc()){
                                $emailNgBan = "SELECT `Email` FROM `taikhoan` WHERE MaTK=" . $row['MaTaiKhoan'];
                                $e = mysqli_query($conn, $emailNgBan);
                                $f = mysqli_fetch_array($e);

                                $tenNgBan = "SELECT `HoTen` FROM `canhan` WHERE Email='" . $f['Email']."'";
                                $g = mysqli_query($conn, $tenNgBan);
                                $h = mysqli_fetch_array($g);
                                echo '<div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                                <div class="product-item">
                                <!--<div class="ribbon red"><span>sale</span></div>-->
                                <div class="image">
                                <img alt="" src="assets/images/products/'.$row['Anh'].'" data-echo="assets/images/products/'.$row['Anh'].'" />
                                </div>
                                <div class="body">
                                <!--<div class="label-discount green">-50% sale</div>-->
                                <div class="title">
                                <a href="single-product.php?id='.$id.'&mh='.$row['MaHang'].'">'.$row['TenHang'].'</a>
                                </div>
                                <div class="brand">'.$row['TinhTrang'].'</div>
                                <div class="ngban">Người bán: '.$h['HoTen'].'</div>
                                </div>
                                <div class="prices">
                                <!--<div class="price-prev">16.000.000đ</div>-->
                                <div class="price-current pull-right">'.$row['GiaBan'].'  VNĐ</div>
                                </div>
                                <div class="hover-area">
                                <div class="add-cart-button">
                                <a href="single-product.php?id='.$id.'&mh='.$row['MaHang'].'" class="le-button">Thêm vào giỏ</a>
                                </div>
                                <div class="wish-compare">
                                <a class="btn-add-to-wishlist" href="#">Yêu thích</a>
                                <a class="btn-add-to-compare" href="#">Trao đổi</a>
                                </div>
                                </div>
                                </div>
                                </div>';
                            };?>
                        </div>
                    </div>
                    <div class="pagination-holder">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 text-left">
                                <ul class="pagination ">
                                    <li class="current"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">next</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="result-counter">
                                    Showing <span>1-9</span> of <span>11</span> results
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="list-view" class="products-grid fade tab-pane ">
                    <div class="products-list">
                        <?php
                        while($row = $result2->fetch_assoc()){
                            $emailNgBan = "SELECT `Email` FROM `taikhoan` WHERE MaTK=" . $row['MaTaiKhoan'];
                            $e = mysqli_query($conn, $emailNgBan);
                            $f = mysqli_fetch_array($e);

                            $tenNgBan = "SELECT `HoTen` FROM `canhan` WHERE Email='" . $f['Email']."'";
                            $g = mysqli_query($conn, $tenNgBan);
                            $h = mysqli_fetch_array($g);
                            echo '<div class="product-item product-item-holder">
                            <div class="row">
                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                            <div class="image">
                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/'.$row['Anh'].'" />
                            </div>
                            </div>
                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                            <div class="body">
                            <!--<div class="label-discount green">-50% sale</div>-->
                            <div class="title">
                            <a href="single-product.php?id='.$id.'&mh='.$row['MaHang'].'">'.$row['TenHang'].'</a>
                            </div>
                            <div class="brand">'.$row['TinhTrang'].'</div>
                            <div class="excerpt">
                            <p>'.$row['MoTa'].'</p>
                            </div>
                            <div class="addto-compare">
                            <a class="btn-add-to-compare" href="#">Trao Đổi</a>
                            </div>
                            </div>
                            </div>
                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                            <div class="right-clmn">
                            <div class="price-current">'.$row['GiaBan'].'  VNĐ</div>
                            <!--<div class="price-prev">29.000.000đ</div>-->
                            <div class="availability"><label>Người Bán: </label><span class="available">'.$h['HoTen'].'</span></div>
                            <a class="btn-add" href="single-product.php?id='.$id.'&mh='.$row['MaHang'].'">Thêm vào giỏ</a>
                            <a class="btn-add-to-wishlist" href="#">Yêu Thích</a>
                            </div>
                            </div>
                            </div>
                            </div>';
                        };?>
                        <div class="pagination-holder">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 text-left">
                                    <ul class="pagination">
                                        <li class="current"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">next</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="result-counter">
                                        Showing <span>1-9</span> of <span>11</span> results
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</section>