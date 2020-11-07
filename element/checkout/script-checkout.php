<script src="assets/js/jquery-1.10.2.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
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
   	var formCheckOut = document.querySelector('section#your-order>form')
   	if(list == null) list = [];
   	list.forEach((el)=>{
   		formCheckOut.innerHTML += '<div class="row no-margin order-item"><div class="col-xs-12 col-sm-1 no-margin"><a href="#" class="qty">'+el.soluong+'</a></div><div class="col-xs-12 col-sm-9 "><div class="title"><a href="#">'+el.tenhang+'</a></div><div class="brand">'+el.nguoiban+'</div></div><div class="col-xs-12 col-sm-2 no-margin"><div class="price">'+el.giatien+'</div></div></div>'
   	});
   	    function tinhTongTien(){
    	var tongtien = 0;
    	list.forEach(el=>{
    		tongtien += +el.giatien * +el.soluong;
    	});
    	document.querySelector('#giatien').innerText = tongtien;
    	
    }
    tinhTongTien();
</script>