<?php 
$maHang = $_GET['mh'];
$sql = "SELECT * FROM `mathang` WHERE MaHang=".$maHang;
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
    $tenNgBan = "SELECT `HoTen`, `SDT` FROM `canhan` WHERE Email='" . $f['Email']."'";
    $g = mysqli_query($conn, $tenNgBan);
    $h = mysqli_fetch_array($g);
    echo '</header>
    <div id="single-product">
    <div class="container">
    <div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">
    <div id="owl-single-product">
    <div class="single-product-gallery-item" id="slide1">
    <a data-rel="prettyphoto" href="images/products/'.$row['Anh'].'">
    <img class="img-responsive" alt="" src="assets/images/products/'.$row['Anh'].'" data-echo="assets/images/products/'.$row['Anh'].'" />
    </a>
    </div>
    </div>
    <div class="single-product-gallery-thumbs gallery-thumbs">
    <div id="owl-single-product-thumbnails">
    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="#slide1">
    <img width="67" alt="" src="assets/images/products/'.$row['Anh'].'" data-echo="assets/images/products/'.$row['Anh'].'" />
    </a>
    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
    <img width="67" alt="" src="assets/images/products/'.$row['Anh'].'" data-echo="assets/images/products/'.$row['Anh'].'" />
    </a>
    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
    <img width="67" alt="" src="assets/images/products/'.$row['Anh'].'" data-echo="assets/images/products/'.$row['Anh'].'" />
    </a>
    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="0" href="#slide1">
    <img width="67" alt="" src="assets/images/products/'.$row['Anh'].'" data-echo="assets/images/products/'.$row['Anh'].'" />
    </a>
    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
    <img width="67" alt="" src="assets/images/products/'.$row['Anh'].'" data-echo="assets/images/products/'.$row['Anh'].'" />
    </a>
    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
    <img width="67" alt="" src="assets/images/products/'.$row['Anh'].'" data-echo="assets/images/products/'.$row['Anh'].'" />
    </a>
    </div>
    <div class="nav-holder left hidden-xs">
    <a class="prev-btn slider-prev" data-target="#owl-single-product-thumbnails" href="#prev"></a>
    </div>
    <div class="nav-holder right hidden-xs">
    <a class="next-btn slider-next" data-target="#owl-single-product-thumbnails" href="#next"></a>
    </div>
    </div>
    </div>
    </div>        
    <div class="no-margin col-xs-12 col-sm-7 body-holder">
    <div class="body">
    <div class="star-holder inline"><div class="star" data-score="4"></div></div>
    <div class="availability"><label>Người bán:</label><span class="available">'.$h['HoTen'].'</span></div>
    <div class="brand"><a class="sdt" href="tel:'.$h['SDT'].'">SĐT liên hệ: '.$h['SDT'].'</a></div>
    <div class="title brand"><a href="#">'.$row['TenHang'].'</a></div>
    <div class="social-row">
    <span class="st_facebook_hcount"></span>
    <span class="st_twitter_hcount"></span>
    <span class="st_pinterest_hcount"></span>
    </div>
    <div class="buttons-holder">
    <a class="btn-add-to-wishlist" href="#">Yêu thích</a>
    <a class="btn-add-to-compare" href="#">Trao Đổi</a>
    </div>
    <div class="excerpt">
    <p>'.$row['MoTa'].'</p>
    </div>
    <div class="prices">
    <div class="price-current">'.$row['GiaBan'].'</div><span>VNĐ</span>
    </div>
    <div class="qnt-holder">
    <div class="le-quantity">
    <form>
    <a class="minus" ></a>
    <input id ="soluong" name="quantity" readonly="readonly" type="text" value="1" />
    <a class="plus"></a>
    </form>
    </div>
    <a id="addcart" href="cart.php?id='.$id.'"  class="le-button huge">Thêm vào giỏ</a>
    </div>';
}?>
</div>
</div>
</div>
</div>
<section id="single-product-tab">
    <div class="container">
        <div class="tab-holder">
            <ul class="nav nav-tabs simple" >
                <li id="infoproduct"><a href="#additional-info" data-toggle="tab">Thông tin sản phẩm</a></li>
                <li id="comments" class="active"><a href="#reviews" data-toggle="tab">Bình luận</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="additional-info">
                    <ul class="tabled-data">
                        <li>
                            <label>weight</label>
                            <div class="value">7.25 kg</div>
                        </li>
                        <li>
                            <label>dimensions</label>
                            <div class="value">90x60x90 cm</div>
                        </li>
                        <li>
                            <label>size</label>
                            <div class="value">one size fits all</div>
                        </li>
                        <li>
                            <label>color</label>
                            <div class="value">white</div>
                        </li>
                        <li>
                            <label>guarantee</label>
                            <div class="value">5 years</div>
                        </li>
                    </ul>
                    <div class="meta-row">
                        <div class="inline">
                            <label>SKU:</label>
                            <span>54687621</span>
                        </div>
                        <span class="seperator">/</span>
                        <div class="inline">
                            <label>categories:</label>
                            <span><a href="#">-50% sale</a>,</span>
                            <span><a href="#">gaming</a>,</span>
                            <span><a href="#">desktop PC</a></span>
                        </div>
                        <span class="seperator">/</span>
                        <div class="inline">
                            <label>tag:</label>
                            <span><a href="#">fast</a>,</span>
                            <span><a href="#">gaming</a>,</span>
                            <span><a href="#">strong</a></span>
                        </div>
                    </div>
                </div>
                <div class="tab-pane active" id="reviews">
                    <div class="comments" id="comment">
                    <?php 
                        $sql = "SELECT * FROM `binhluan` WHERE MaHang=".$maHang;
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        if($row != 0){
                            while($row){
                                $sql2 = "SELECT `HoTen` FROM `canhan` WHERE MaCaNhan=".$row['MaTaiKhoan'];
                                $c = mysqli_query($conn, $sql2);
                                $d = mysqli_fetch_array($c);
                                echo '<div class="comment-item">
                                        <div class="row no-margin">
                                            <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                                <div class="avatar">
                                                    <img alt="avatar" src="assets/images/default-avatar.jpg">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-lg-11 col-sm-10 no-margin">
                                                <div class="comment-body">
                                                    <div class="meta-info">
                                                        <div class="author inline">
                                                            <a href="#" class="bold">'.$d['HoTen'].'</a>
                                                        </div>
                                                        <div class="star-holder inline">
                                                            <div class="star" data-score="'.$row['DanhGia'].'"></div>
                                                        </div>
                                                        <div class="date inline pull-right">
                                                            '.date('d/m/Y', $row['date']).'
                                                        </div>
                                                    </div>
                                                    <p class="comment-text">
                                                        '.$row['NoiDung'].'
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                $row = $result->fetch_assoc();
                            }
                        }else{
                            echo '<div class="comment-item">
                            <span>Chưa có bình luận nào.</span>
                            </div>';
                        }
                    ?>
                    </div>
                    <div class="add-review row">
                        <div class="col-sm-8 col-xs-12">
                            <div class="new-review-form">
                                <h2>Bình luận</h2>
                                <form id="contact-form" action="" class="contact-form" method="POST" >
                                    <div class="field-row star-row">
                                        <label>Bình chọn</label>
                                        <div class="star-holder">
                                            <div class="star big" data-score="0"></div>
                                        </div>
                                    </div>
                                    <div class="field-row">
                                        <label>Viết bình luận</label>
                                        <textarea name="comment" required="" rows="8" class="le-input"></textarea>
                                    </div>
                                    <div class="buttons-holder">
                                        <button id="btn-comment" name="btn-comment" type="submit" class="le-button huge">Đăng bình luận</button>
                                    </div>
                                    <?php
                                        if (isset($_POST['btn-comment'])){
                                            $date = time();
                                            echo $mathang;
                                            $sql = "INSERT INTO `binhluan`(`MaBinhLuan`, `NoiDung`, `DanhGia`, `date`, `MaHang`, `MaTaiKhoan`) VALUES ('','".$_POST['comment']."',".$_POST['score'].",".$date.",".$maHang.",".$id.")";
                                            if(mysqli_query($conn, $sql)){
                                                echo '<script>window.location="http://localhost/CDIO3/single-product.php?id='.$id.'&mh='.$maHang.'";</script>';
                                            }
                                        }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
