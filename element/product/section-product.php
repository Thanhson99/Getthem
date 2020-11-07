<section id="recently-reviewd" class="wow fadeInUp">
	<div class="container">
		<div class="carousel-holder hover">
			<div class="title-nav">
				<h2 class="h1">Sản phẩm đã xem</h2>
				<div class="nav-holder">
					<a href="#prev" data-target="#owl-recently-viewed" class="slider-prev btn-prev fa fa-angle-left"></a>
					<a href="#next" data-target="#owl-recently-viewed" class="slider-next btn-next fa fa-angle-right"></a>
				</div>
			</div>
					<div class="product-item">
						<?php 
                            $sql = "SELECT * FROM `mathang`";
                                    
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
                                echo ' <div id="owl-recently-viewed" class="owl-carousel product-grid-holder">
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
                                                        <div class="ngban">Người bán: '.$h['HoTen'].'</div>
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
</section>