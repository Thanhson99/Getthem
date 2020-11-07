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
    $email = "SELECT `Email` FROM `taikhoan` WHERE `MaTK`='" . $id . "'";
    $a = mysqli_query($conn, $email);
    $b = mysqli_fetch_array($a);
?>
<body style="">
    <div class="wrapper">
        <nav class="top-bar animate-dropdown">
            <div class="container">
                <div class="col-xs-12 col-sm-6 no-margin">
                    <ul>
                        <li><?php echo '<a href="index.php?id='.$id.'">'?>Trang chủ</a></li>
                        <li><?php echo '<a href="about.php?id='.$id.'">'?>Giới Thiệu</a></li>
                        <li><?php echo '<a href="contact.php?id='.$id.'">'?>Liên hệ</a></li>
                        <li><?php echo '<a href="faq.php?id='.$id.'">'?>Trợ giúp</a></li>
                        <li><?php echo '<a href="terms.php?id='.$id.'">'?>Điều khoản</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 no-margin">
                    <ul class="right">
                        <li>
                            <a class = "account" href="#">Tài khoản</a>
                            <ul class = "account-option-menu">
                                <li><?php echo '<a href="customer-account.php?id='.$id.'">'?><?php  if(strlen($b['Email']) > 15){
                                        echo substr($b['Email'], 0, 14) . '...';
                                    }else{
                                        echo $b['Email'];
                                    }
                                    ?></a></li>
                                <li><?php echo '<a href="single-sale.php?id='.$id.'">'?>Đăng bán</a></li>
                                <li><?php echo '<a href="list-product.php?id='.$id.'">'?>Của tôi</a></li>
                                <li><a href="#">Cửa hàng</a></li>
                                <li><?php echo '<a onclick="logout()" href="index.php">'?>Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header>
            <div class="container no-padding">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <div class="logo">
                        <?php echo '<a href="index.php?id='.$id.'">'?>
                            <img src="assets/images/logofake.png" alt="" style="width:233px; height:54px"/>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder no-margin">
                    <div class="contact-row">
                        <div class="phone inline">
                            <i class="fa fa-phone"></i> (+84) 1800 8108
                        </div>
                        <div class="contact inline">
                            <i class="fa fa-envelope"></i> doancdio3@<span class="le-color">gmail.com</span>
                        </div>
                    </div>
                    <div class="search-area">
                        <form>
                            <div class="control-group">
                                <input class="search-field" placeholder="Tìm kiếm">
                                <ul class="categories-filter animate-dropdown">
                                    <li class="dropdown">
                                        <?php echo '<a class="dropdown-toggle" data-toggle="dropdown" href="category-grid.php?id=' .$id .'">' ?>Tất cả</a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li role="presentation"><?php echo '<a role="menuitem" tabindex="-1" href="category-grid.php?id='.$id.'">'?>Máy tính xách tay</a></li>
                                            <li role="presentation"><?php echo '<a role="menuitem" tabindex="-1" href="category-grid.php?id='.$id.'">'?>Tivi</a></li>
                                            <li role="presentation"><?php echo '<a role="menuitem" tabindex="-1" href="category-grid.php?id='.$id.'">'?>Áo quần</a></li>
                                            <li role="presentation"><?php echo '<a role="menuitem" tabindex="-1" href="category-grid.php?id='.$id.'">'?>Điện thoại</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <a class="search-button" href="#"></a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 top-cart-row no-margin">
                    <div class="top-cart-row-container">
                        <div class="wishlist-compare-holder">
                            <div class="wishlist ">
                                <a href="#"><i class="fa fa-heart"></i> Đã thích <span class="value">(0)</span> </a>
                            </div>
                        </div>
                        <div class="top-cart-holder dropdown animate-dropdown">
                            <div class="basket">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <div class="basket-item-count">
                                        <span class="count">0</span>
                                        <img src="assets/images/icon-cart.png" alt="">
                                    </div>
                                    <div class="total-price-basket">
                                        <span class="lbl">Giỏ hàng</span>
                                        <span class="total-price">
                                            <span class="value">0 vnđ</span>
                                        </span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="basket-item">
                                            <div class="row" id = "mathang">
                                               <!-- <div class="col-xs-4 col-sm-4 no-margin text-center">
                                                    <div class="thumb">
                                                        <img alt="" src="assets/images/products/product-small-01.jpg">
                                                    </div>
                                                </div>
                                                <div class="col-xs-8 col-sm-8 no-margin">
                                                    <div class="title">White Lumia 9001</div>
                                                    <div class="price">2.000.000 vnđ</div>
                                                    <div class="count">x3 <span>Chiếc</span></div>
                                                </div> 
                                            -->
                                            </div>
                                            <a class="close-btn" href="#"></a>
                                        </div>
                                    </li>
                                    <li class="checkout">
                                        <div class="basket-item">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6">
                                                    <?php echo '<a href="cart.php?id='.$id.'"class="le-button inverse">' ?>Giỏ Hàng</a>
                                                </div>
                                                <div class="col-xs-12 col-sm-6">
                                                    <?php echo '<a href="checkout.php?id='.$id.'" class="le-button">' ?>Thanh Toán</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <script type="text/javascript">
            var keyListItemCart = 'keyListItemCart';
            var list = JSON.parse(localStorage.getItem(keyListItemCart));
            if(list == null) list = [];
                    function tinhTongTien(){
                            var tongtien = 0;
                            list.forEach(el=>{
                                tongtien += +el.giatien * +el.soluong;
                                document.querySelector('#mathang').innerHTML +=
                                '<div class="col-xs-4 col-sm-4 no-margin text-center"><div class="thumb"><img alt="" src="'+el.hinhanh+'"></div></div><div class="col-xs-8 col-sm-8 no-margin"><div class="title">'+el.tenhang+'</div><div class="price">'+el.giatien+'  VNĐ</div><div class="count">x'+el.soluong+' <span>Chiếc</span></div></div>'
                            });
                            document.querySelector('.basket-item-count span.count').innerText = list.length;
                            document.querySelector('span.total-price span.value').innerText = tongtien;
                        }
                    tinhTongTien();   
                function logout(){
                    alert("Đã đăng xuất!");
                }              
        </script>