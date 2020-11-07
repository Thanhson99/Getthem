<section id="checkout-page">
            <div class="container">
                <div class="col-xs-12 no-margin">
                    <div class="billing-address">
                        <h2 class="border h1">Địa chỉ thanh toán</h2>
                        <form>
                            <div class="row field-row">
                                <div class="col-xs-12 col-sm-6">
                                    <label>Họ và Tên*</label>
                                    <input class="le-input">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label> Họ*</label>
                                    <input class="le-input">
                                </div>
                            </div>
                            <div class="row field-row">
                                <div class="col-xs-12">
                                    <label>Tên công ty</label>
                                    <input class="le-input">
                                </div>
                            </div>
                            <div class="row field-row">
                                <div class="col-xs-12 col-sm-6">
                                    <label>Địa chỉ*</label>
                                    <input class="le-input" data-placeholder="street address">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label>&nbsp;</label>
                                    <input class="le-input" data-placeholder="town">
                                </div>
                            </div>
                            <div class="row field-row">
                                <div class="col-xs-12 col-sm-4">
                                    <label>Mã bưu chính / Zip*</label>
                                    <input class="le-input">
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <label>địa chỉ email*</label>
                                    <input class="le-input">
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <label>Số điện thoại*</label>
                                    <input class="le-input">
                                </div>
                            </div>
                            <div class="row field-row">
                                <div id="create-account" class="col-xs-12">
                                    <input class="le-checkbox big" type="checkbox" />
                                    <a class="simple-link bold" href="#">Tạo tài khoản?</a> - bạn sẽ nhận được email với mật khẩu được tạo tạm thời sau khi đăng nhập, bạn cần thay đổi nó.
                                </div>
                            </div>
                        </form>
                    </div>
                    <section id="shipping-address">
                        <h2 class="border h1">địa chỉ vận chuyển</h2>
                        <form>
                            <div class="row field-row">
                                <div class="col-xs-12">
                                    <input class="le-checkbox big" type="checkbox" />
                                    <a class="simple-link bold" href="#">gửi đến địa chỉ khác?</a>
                                </div>
                            </div>
                        </form>
                    </section>
                    <section id="your-order">
                        <h2 class="border h1">Đơn đặt hàng của bạn</h2>
                        <form>
                            <!-- <div class="row no-margin order-item">
                                <div class="col-xs-12 col-sm-1 no-margin">
                                    <a href="#" class="qty">1 x</a>
                                </div>
                                <div class="col-xs-12 col-sm-9 ">
                                    <div class="title"><a href="#">white lumia 9001 </a></div>
                                    <div class="brand">sony</div>
                                </div>
                                <div class="col-xs-12 col-sm-2 no-margin">
                                    <div class="price">2.000.000 vnđ</div>
                                </div>
                            </div> -->
                        </form>
                    </section>
                    <div id="total-area" class="row no-margin">
                        <div class="col-xs-12 col-lg-4 col-lg-offset-8 no-margin-right">
                            <div id="subtotal-holder">
                                <ul class="tabled-data inverse-bold no-border">
                                    <li>
                                        <label>Tổng phụ</label>
                                        <div class="value ">0 vnđ</div>
                                    </li>
                                    <li>
                                        <label>Vận chuyển</label>
                                        <div class="value">
                                            <div class="radio-group">
                                                <input class="le-radio" type="radio" name="group1" value="free"> <div class="radio-label bold">Miễn phí vận chuyển</div><br>
                                                <input class="le-radio" type="radio" name="group1" value="local" checked>  <div class="radio-label">Đỉa chỉ giao hàng<br><span class="bold">30.000</span></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul id="total-field" class="tabled-data inverse-bold ">
                                    <li>
                                        <label>Tổng phí</label>
                                        <div class="value" id = "giatien">0<span>vnđ</span></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="payment-method-options">
                        <form>
                            <div class="payment-method-option">
                                <input class="le-radio" type="radio" name="group2" value="Direct">
                                <div class="radio-label bold ">
                                    Chuyển khoản trực tiếp<br>
                                </div>
                            </div>
                            <div class="payment-method-option">
                                <input class="le-radio" type="radio" name="group2" value="cheque">
                                <div class="radio-label bold ">Thanh toán séc</div>
                            </div>
                            <div class="payment-method-option">
                                <input class="le-radio" type="radio" name="group2" value="paypal">
                                <div class="radio-label bold ">hệ thống paypal</div>
                            </div>
                        </form>
                    </div>
                    <div class="place-order-button">
                        <button class="le-button big">đặt hàng</button>
                    </div>
                </div>
            </div>
        </section>