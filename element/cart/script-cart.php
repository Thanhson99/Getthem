	<script src="assets/js/jquery-1.10.2.min.js"></script>
	<script src="assets/js/jquery-migrate-1.2.1.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
	<script src="assets/js/gmap3.min.js"></script>
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/css_browser_selector.min.js"></script>
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.raty.min.js"></script>
    <script src="assets/js/jquery.prettyPhoto.min.js"></script>
    <script src="assets/js/jquery.customSelect.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>
	<script type="text/javascript">
    $(document).ready(function(){
      $('.account').click(function(){
        $('.account-option-menu').slideToggle('fast');
      });
    });

    var keyListItemCart = 'keyListItemCart';
    var list = JSON.parse(localStorage.getItem(keyListItemCart));
    if(list == null) list = [];
    var cartTable = document.querySelector('.col-xs-12.col-md-9.items-holder.no-margin');

    $('.minus').on('click',()=>{
    	if(document.querySelector('#soluong').value  != 1)
    		document.querySelector('#soluong').value  --;
    });
    $('.plus').on('click',()=>{
    	if(document.querySelector('#soluong').value  < 10 )
    		document.querySelector('#soluong').value  ++;
    });
    function tang(btn,index){
    	var soluong = document.querySelector('input.'+btn.getAttribute('tenhang')+'');
    	if(soluong.value < 10){
    	soluong.value ++;
    	list[index].soluong ++;
    	localStorage.setItem(keyListItemCart,JSON.stringify(list));
    	}
    	tinhTongTien();
    }
    function giam(btn,index){
    	var soluong = document.querySelector('input.'+btn.getAttribute('tenhang')+'');
    	if(soluong.value > 1){
    	soluong.value --;
    	list[index].soluong --;
    	localStorage.setItem(keyListItemCart,JSON.stringify(list));
    	}
    	tinhTongTien();
    }
    function xoa(index){
    	list.splice(index,1);
    	localStorage.setItem(keyListItemCart,JSON.stringify(list));
    }
    function tinhTongTien(){
    	var tongtien = 0;
    	list.forEach(el=>{
    		tongtien += +el.giatien * +el.soluong;
    	});
    	document.querySelector('#tamtinh').innerText = tongtien;
    	document.querySelector('#tongtien').innerText = tongtien;
    }
    tinhTongTien();
    list.forEach((el,index) => {
    	cartTable.innerHTML += '<div class="row no-margin cart-item"> <div class="col-xs-12 col-sm-2 no-margin"> <a href="#" class="thumb-holder"> <img class="lazy" alt="" src="'+el.hinhanh+'" /></a></div><div class="col-xs-12 col-sm-5 "><div class="title"><a href="#">'+el.tenhang+'</a></div><div class="brand">'+
    	el.nguoiban+'</div></div><div class="col-xs-12 col-sm-3 no-margin"><div class="quantity"><div class="le-quantity"><form><a class="minus" onclick = "giam(this,'+index+')" tenhang = ' +el.tenhang+'></a><input class = '+el.tenhang+'name="quantity" readonly="readonly" type="text" value="'+el.soluong+'" /><a class="plus" onclick = "tang(this,'+index+')" tenhang = ' +el.tenhang+'></a></form></div></div></div><div class="col-xs-12 col-sm-2 no-margin"><div class="price">'+el.giatien+'</div><a class="close-btn" onclick = "xoa('+index+')" href="cart.php"></a></div></div>'
    });
	</script>