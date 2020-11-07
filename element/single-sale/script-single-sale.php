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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
  $(document).ready(function(){
      $('.account').click(function(){
        $('.account-option-menu').slideToggle('fast');
      });
    });
  function previewFile() {
    var preview = document.querySelector('#anhHang');
    var file    = document.querySelector('#id_file_name').files[0];
    var reader  = new FileReader();

    reader.onloadend = function (e) {
      preview.src = reader.result;
      preview.style.display = 'block';
      preview.style.height = '50%';
      preview.style.width = '50%';
    }

    if (file) {
      reader.readAsDataURL(file);
    } else {
      preview.src = "";
    }
  };
  $(document).ready(function($){
    $('#tinhTP').change(function(event){
      provinceID = $('#tinhTP').val();
      $.post('element/single-sale/district.php',{"idTinhTP":provinceID},function(data){
          $('#quanHuyen').html(data);
      })
    })
  })
</script>