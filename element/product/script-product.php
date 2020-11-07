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
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $('.account').click(function(){
        $('.account-option-menu').slideToggle('fast');
      });
    });
    function Items(tenhang,hinhanh,soluong,giatien,nguoiban){
    	this.tenhang = tenhang;
    	this.hinhanh = hinhanh;
    	this.soluong = soluong;
    	this.giatien = giatien;
    	this.nguoiban = nguoiban;
    }

    var keyListItemCart = 'keyListItemCart';
    var list = JSON.parse(localStorage.getItem(keyListItemCart));
    if(list == null) list = [];
    $('.minus').on('click',()=>{
    	if(document.querySelector('#soluong').value  != 1)
    		document.querySelector('#soluong').value  --;
    });
    $('.plus').on('click',()=>{
    	if(document.querySelector('#soluong').value  < 10 )
    		document.querySelector('#soluong').value  ++;
    });
	$('#addcart').on('click',()=>{
		var item = new Items(document.querySelector('.title a').innerText,document.querySelector('.img-responsive').src,document.querySelector('#soluong').value,document.querySelector('.price-current').innerText,document.querySelector('.available').innerText);
		var dem = 0;
	    list.forEach(el =>{
	    	if(el.tenhang == item.tenhang){
	    		el.soluong ++;
	    		dem ++;
	    	}
	    });
	    if(dem == 0) list.push(item);
	    localStorage.setItem(keyListItemCart,JSON.stringify(list));
	});
</script>