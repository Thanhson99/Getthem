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
<script type = "text/javascript">
  $(document).ready(function(){
      $('.account').click(function(){
        $('.account-option-menu').slideToggle('fast');
      });
    });

  	function show(){
        $('#confirm-area').addClass('show');
    }

    function hide(conf){
        conf.classList.remove('show');
    }
    function daban(num){
      document.getElementById('daban'+num).innerHTML = ' Đã Bán';
      document.getElementById('daban'+num).style.color = 'red';
    }
</script>