
        </header>
        <section id="cart-page">
            <div class="container">
                <div class="col-xs-12 col-md-9 items-holder no-margin">

                    <!--<div class="row no-margin cart-item">
                        <div class="col-xs-12 col-sm-2 no-margin">
                            <a href="#" class="thumb-holder">
                                <img class="lazy" alt="" src="http://placehold.it/73x73" />
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-5 ">
                            <div class="title">
                                <a href="#">white lumia 9001</a>
                            </div>
                            <div class="brand">sony</div>
                        </div>
                        <div class="col-xs-12 col-sm-3 no-margin">
                            <div class="quantity">
                                <div class="le-quantity">
                                    <form>
                                        <a class="minus" href="#reduce"></a>
                                        <input name="quantity" readonly="readonly" type="text" value="1" />
                                        <a class="plus" href="#add"></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-2 no-margin">
                            <div class="price">
                                $2000.00
                            </div>
                            <a class="close-btn" href="#"></a>
                        </div>
                    </div>
                    <div class="row no-margin cart-item">
                        <div class="col-xs-12 col-sm-2 no-margin">
                            <a href="#" class="thumb-holder">
                                <img class="lazy" alt="" src="http://placehold.it/73x73" />
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-5">
                            <div class="title">
                                <a href="#">white lumia 9001 </a>
                            </div>
                            <div class="brand">sony</div>
                        </div>
                        <div class="col-xs-12 col-sm-3 no-margin">
                            <div class="quantity">
                                <div class="le-quantity">
                                    <form>
                                        <a class="minus" href="#reduce"></a>
                                        <input name="quantity" readonly="readonly" type="text" value="1" />
                                        <a class="plus" href="#add"></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-2 no-margin">
                            <div class="price">
                                $2000.00
                            </div>
                            <a class="close-btn" href="#"></a>
                        </div>
                    </div>
                    <div class="row no-margin cart-item">
                        <div class="col-xs-12 col-sm-2 no-margin">
                            <a href="#" class="thumb-holder">
                                <img class="lazy" alt="" src="http://placehold.it/73x73" />
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-5">
                            <div class="title">
                                <a href="#">white lumia 9001 </a>
                            </div>
                            <div class="brand">sony</div>
                        </div>
                        <div class="col-xs-12 col-sm-3 no-margin">
                            <div class="quantity">
                                <div class="le-quantity">
                                    <form>
                                        <a class="minus" href="#reduce"></a>
                                        <input name="quantity" readonly="readonly" type="text" value="1" />
                                        <a class="plus" href="#add"></a>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-2 no-margin">
                            <div class="price">
                                $2000.00
                            </div>
                            <a class="close-btn" href="#"></a>
                        </div>
                    </div>
                    <div class="row no-margin cart-item">
                        <div class="col-xs-12 col-sm-2 no-margin">
                            <a href="#" class="thumb-holder">
                                <img class="lazy" alt="" src="http://placehold.it/73x73" />
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-5">
                            <div class="title">
                                <a href="#">white lumia 9001 </a>
                            </div>
                            <div class="brand">sony</div>
                        </div>
                        <div class="col-xs-12 col-sm-3 no-margin">
                            <div class="quantity">
                                <div class="le-quantity">
                                    <form>
                                        <a class="minus" href="#reduce"></a>
                                        <input name="quantity" readonly="readonly" type="text" value="1" />
                                        <a class="plus" href="#add"></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-2 no-margin">
                            <div class="price">
                                $2000.00
                            </div>
                            <a class="close-btn" href="#"></a>
                        </div>
                    </div>
                    -->
                </div>
                
                <div class="col-xs-12 col-md-3 no-margin sidebar ">
                    <div class="widget cart-summary">
                        <h1 class="border">Giỏ hàng</h1>
                        <div class="body">
                            <ul class="tabled-data no-border inverse-bold">
                                <li>
                                    <label>Số tiền</label>
                                    <div id = "tamtinh" class="value pull-right">8.434.000.00</div>
                                </li>
                                <li>
                                    <label>Vận chuyển</label>
                                    <div  class="value pull-right">Miễn phí vận chuyển</div>
                                </li>
                            </ul>
                            <ul id="total-price" class="tabled-data inverse-bold no-border">
                                <li>
                                    <label>Tổng tiền</label>
                                    <div id ="tongtien" class="value pull-right">8.434.000.00</div>
                                </li>
                            </ul>
                            <div class="buttons-holder">
                                <?php echo '<a class="le-button big" href="http://localhost/CDIO3/checkout.php?id='.$id.'">'?>Thanh toán</a>
                                <?php echo '<a class="simple-link block" href="http://localhost/CDIO3/index.php?id='.$id.'">'?>Tiếp tục mua hàng</a>
                            </div>
                        </div>
                    </div><!-- /.widget -->
                    <div id="cupon-widget" class="widget">
                        <h1 class="border">Sử dụng mã giảm giá</h1>
                        <div class="body">
                            <form>
                                <div class="inline-input">
                                    <input data-placeholder="Nhập mã giảm giá" type="text" />
                                    <button class="le-button" type="submit">Áp dụng</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>