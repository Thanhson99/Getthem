<script src="./assets/js/jquery-1.10.2.min.js"></script>
<script src="./assets/js/jquery-migrate-1.2.1.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/gmap3.min.js"></script>
<script src="./assets/js/bootstrap-hover-dropdown.min.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/css_browser_selector.min.js"></script>
<script src="./assets/js/echo.min.js"></script>
<script src="./assets/js/jquery.easing-1.3.min.js"></script>
<script src="./assets/js/bootstrap-slider.min.js"></script>
<script src="./assets/js/jquery.raty.min.js"></script>
<script src="./assets/js/jquery.prettyPhoto.min.js"></script>
<script src="./assets/js/jquery.customSelect.min.js"></script>
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/scripts.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $('.account').click(function(){
        $('.account-option-menu').slideToggle('fast');
      });
    });
    $('#nhantin-button').on('click',function(event){
    	Email.send({
	    Host : "smtp.gmail.com",
	    Username : "getthem.ecommerce@gmail.com",
	    Password : "thiet1999",
	    To : $('#email-nhantin').val(),
	    From : "getthem.ecommerce@gmail.com",
	    Subject : "Cảm ơn bạn đã đăng ký theo dõi GETTHEM",
	    Body : "hello"
		}).then(
 		 message => alert('cảm ơn bạn đã đăng ký theo dõi chúng tôi')
		);
    });

    function getMaHang(maDM){
    	window.location="http://localhost/CDIO3/category-grid.php?id=" + <?php echo $id?> + "&madm=" + maDM;
    }
    function down(){
        window.scrollTo(0, 1550);
    }
</script>