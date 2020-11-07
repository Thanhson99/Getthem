<main id="authentication" class="inner-bottom-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <section class="section sign-in inner-right-xs">
                            <h2 class="bordered">Đăng nhập</h2>
                            <p>Đăng nhập để mua đồ và nhận nhiều ưu đãi</p>
                            <div class="social-auth-buttons">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="btn-block btn-lg btn btn-facebook"><i class="fa fa-facebook"></i> Đăng Nhập Với Facebook</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn-block btn-lg btn btn-twitter"><i class="fa fa-twitter"></i> Đăng Nhập Với Twitter</button>
                                    </div>
                                </div>
                            </div>
                            <form role="form" method="POST" class="login-form cf-style-1">
                                <div class="field-row">
                                    <span id="formatEmail"></span>
                                </div>
                                <div class="field-row">
                                    <label>Email</label>
                                    <input onchange="checkEmail()" name="dnemail" id="email" required="" type="text" class="le-input">
                                </div>
                                <div class="field-row">
                                    <label>Mật Khẩu</label>
                                    <input required="" name="dnpassword" type="password" class="le-input">
                                </div>
                                <div class="field-row clearfix">
                                    <span class="pull-left">
                                        <label class="content-color"><input type="checkbox" class="le-checbox auto-width inline"> <span class="bold">Nhớ cho lần đăng nhập sau</span></label>
                                    </span>
                                    <span class="pull-right">
                                        <a href="#" class="content-color bold">Quên Mật Khẩu ?</a>
                                    </span>
                                </div>
                                <div class="buttons-holder">
                                    <button type="submit" class="le-button huge">Đăng Nhập</button>
                                </div>
                                <?php
                                    if(!empty($_POST['dnemail']) && !empty($_POST['dnpassword'])){
                                        $checkEmail = "SELECT `MaTK`,`Email`, `Password` FROM `taikhoan` WHERE `Email`='" . $_POST['dnemail'] . "' AND `Password`= '" . $_POST['dnpassword'] . "'";
                                    
                                        $c = mysqli_query($conn, $checkEmail);
                                        $d = mysqli_fetch_array($c);
                                        if(!$d['Email'])
                                            echo '<script type="text/javascript">
                                                formatEmail.innerHTML = "Tài khoản hoặc mật khẩu sai ?";
                                                formatEmail.style.color = "red";
                                                dnemail.focus();
                                                </script>';
                                        else
                                            echo '<script type="text/javascript">window.location="http://localhost/CDIO3/index.php?id='.$d['MaTK'].'"</script>';
                                    }
                                ?>
                            </form>
                        </section>
                    </div>
                    <div class="col-md-6">
                        <section class="section register inner-left-xs">
                            <h2 class="bordered">Tạo Tài Khoản</h2>
                            <p>Tạo tài khoản của bạn tại <span style="color:#59b210; font-weight:bold">getthem</span></p>
                            <form role="form" class="register-form cf-style-1" method="POST">
                                <div class="field-row">
                                    <span id="formatEmailDK"></span>
                                </div>
                                <div class="field-row">
                                    <label>Email (*)</label>
                                    <input onchange="checkEmailDK()" name="email" id="emaildk" required="" type="text" class="le-input">
                                </div>
                                <div class="field-row">
                                    <label>Mật Khẩu (*)</label>
                                    <input id="password" name="password" required="" type="password" class="le-input">
                                </div>
                                <div class="field-row">
                                    <span id="formatPassword"></span>
                                </div>
                                <div class="field-row">
                                    <label>Nhập Lại Mật Khẩu (*)</label>
                                    <input onchange="checkPassword(this)" id="confirm-password" required="" type="password" class="le-input">
                                </div>
                                <div class="field-row">
                                    <label>Họ Và Tên (*)</label>
                                    <input name="name" required="" type="text" class="le-input">
                                </div>
                                <div class="field-row">
                                    <label>Số Điện Thoại (*)</label>
                                    <input name="phone-number" required="" type="text" class="le-input">
                                </div>
                                <div class="field-row sex" data-validate="sex is required">
                                    <label>Giới Tính(*)</label>
                                    <span class="radio-group" data-type="radio">
                                        <span class="rd">
                                            <input id="male" type="radio" name="sex" value="1" required="">
                                            <label>Nam</label>
                                        </span>
                                        <span class="rd">
                                            <input id="female" type="radio" name="sex" value="0">
                                            <label>Nữ</label>
                                        </span>
                                    </span>
                                </div>
                                <div class="field-row">
                                    <label>Ngày sinh(*)</label>
                                    <span class="date">
                                        <select name="year" id="year" size="1" required=""></select>

                                        <select name="month" id="month" size="1" required=""></select>

                                        <select name="day" id="day" size="1" required="">
                                            <option value=" " selected="selected">Ngày</option>
                                        </select>
                                    </span>
                                </div>
                                <div class="field-row">
                                    <label>Địa Chỉ (*)</label>
                                    <input name="address" required="" type="text" class="le-input">
                                </div>
                                <div class="field-row dksd">
                                    <input required="" id="cb-dksd" type="checkbox">
                                    <label id="lb-dksd">Tôi đồng ý với các <a href="#">điều khoản sử dụng</a> và <a href="#">bảo mật</a></label>
                                </div>
                                <div class="buttons-holder">
                                    <button onclick="getText()" type="submit" class="le-button huge">Đăng kí</button>
                                </div>
                                <?php

                                    if(!empty($_POST['email']) && !empty($_POST['password'])){
                                        if($_POST['sex']){
                                            $sex = "Nam";
                                        }else{
                                            $sex = "Nữ";
                                        }
                                        $checkEmail = "SELECT `Email` FROM `taikhoan` WHERE `Email`='" . $_POST['email'] . "'";
                                        $a = mysqli_query($conn, $checkEmail);
                                        $b = mysqli_fetch_array($a);
                                        if($b['Email'])
                                            echo '<script type="text/javascript">
                                                formatEmailDK.innerHTML = "Email này đã được đăng kí";
                                                formatEmailDK.style.color = "red";
                                                email.focus();
                                                </script>';
                                        else{
                                            // echo '<script type="text/javascript">
                                            //     formatEmail.innerHTML = "Email không hợp lệ.";
                                            //     formatEmail.style.color = "red";
                                            //     email.focus();
                                            //     </script>';
                                            $sql = "INSERT INTO `taikhoan`(`MaTK`, `Email`, `Password`) VALUES ('', '" . $_POST['email'] . "', '" .  $_POST['password'] . "')";
                                            $sql2 = "INSERT INTO `canhan`(`MaCaNhan`, `HoTen`, `GioiTinh`, `Ngay`, `Thang`, `Nam`, `Email`, `SDT`, `DiaChi`) VALUES ('','" . $_POST['name'] . "','" . $sex . "','" . $_POST['day'] . "','" . $_POST['month'] . "','" . $_POST['year'] . "','" . $_POST['email'] . "','" . $_POST['phone-number'] . "','" . $_POST['address'] . "')";
                                            if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
                                                echo '<script language="javascript">';
                                                echo 'alert("Đăng kí thành công")';
                                                echo '</script>';
                                            } else {
                                                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                                  echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
                                            }
                                            mysqli_close($conn);
                                        }
                                    }
                                ?>
                            </form>
                            <h2 class="semi-bold">Đăng ký ngay hôm nay để nhận được:</h2>
                            <ul class="list-unstyled list-benefits">
                                <li><i class="fa fa-check primary-color"></i> Nhận ưu đãi với voucher lên đến 50k khi mua hàng</li>
                                <li><i class="fa fa-check primary-color"></i> Ưu tiên chuyển hàng nhanh trong 3 ngày</li>
                                <li><i class="fa fa-check primary-color"></i> Theo dõi đơn hàng của bạn một cách dễ dàng</li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </main>