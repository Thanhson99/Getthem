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
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $('.account').click(function(){
        $('.account-option-menu').slideToggle('fast');
      });
    });

    function editProfile(){
    	document.getElementById('profile').style.display = 'none';
    	document.getElementById('edit_profile').style.display = 'block';
    }

    function checkEmail() {
        var email = document.getElementById('fremail');
        var formatEmail = document.getElementById('showText'); 
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(email.value != ""){
            if(!filter.test(email.value)) {
                formatEmail.innerHTML = "Email không hợp lệ.";
                formatEmail.style.color = "red";
                email.focus();
            }else{
            	formatEmail.innerHTML = "";
            }
        }
    }
</script>

<script>
$(function(){
//Năm tự động điền vào select
    var seYear = $('#year');
    var date = new Date();
    var cur = date.getFullYear();

    seYear.append('<option value="">Năm</option>');
    for (i = cur; i >= 1900; i--) {
        seYear.append('<option value="'+i+'">'+i+'</option>');
    };

    //Tháng tự động điền vào select
    var seMonth = $('#month');
    var date = new Date();

    var month=new Array();
    month[1] = "Tháng 1";
    month[2] = "Tháng 2";
    month[3] = "Tháng 3";
    month[4] = "Tháng 4";
    month[5] = "Tháng 5";
    month[6] = "Tháng 6";
    month[7] = "Tháng 7";
    month[8] = "Tháng 8";
    month[9] = "Tháng 9";
    month[10] = "Tháng 10";
    month[11] = "Tháng 11";
    month[12] = "Tháng 12";

    seMonth.append('<option value="">Tháng</option>');
    for (i = 12; i > 0; i--) {
        seMonth.append('<option value="'+i+'">'+month[i]+'</option>');
    };

    //Ngày tự động điền vào select
    function dayList(month,year) {
        var day = new Date(year, month, 0);
        return day.getDate();
    }

    $('#year, #month').change(function(){
        //Đoạn code lấy id không viết bằng jQuery để phù hợp với đoạn code bên dưới
        var y = document.getElementById('year');
        var m = document.getElementById('month');
        var d = document.getElementById('day');
        var year = y.options[y.selectedIndex].value;
        var month = m.options[m.selectedIndex].value;
        var day = d.options[d.selectedIndex].value;
        if (day == ' ') {
            var days = (year == ' ' || month == ' ')? 31 : dayList(month,year);
            d.options.length = 0;
            d.options[d.options.length] = new Option('Ngày',' ');
            for (var i = 1; i <= days; i++)
            	d.options[d.options.length] = new Option(i,i);
        }
    });
});
</script>