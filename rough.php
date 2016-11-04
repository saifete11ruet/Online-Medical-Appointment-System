<?php
$selectedTime = "9:15 AM";
$endTime="10:30 AM";
$time1 = strtotime($selectedTime);
$time2 = strtotime($endTime);

for($i=$time1;$i<=$time2;){
    $j=date('h:i A',$i);
    echo $j."<br>";
    $i = strtotime("+15 minutes", $i);


}




echo (int)(1.1+1.9);







/*
 // doc_time_ajax

<?php
require_once '../db_connection.php';
if (isset($_GET['value'])){
    if (!empty($_GET['value'])) {
        $val = $_GET['value'];
        $sql = "SELECT start_time,end_time FROM doctors WHERE id='$val' ";

        $result = mysql_query($sql);


        while ($row = mysql_fetch_array($result)) {

            $arr = array();
            $arr[0] = $row['start_time'];
            $arr[1] = $row['end_time'];
            echo json_encode($arr);
            exit();
        }
    }
}
?>

*/


//footer.php

/*
 <section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <ul class="text-center contact">
                    <li class="socials-icons">
                        <a href="#" data-toggle="tooltip" title="Share in Facebook" class="facebook"><i
                                class="fa fa-facebook"></i></a>
                    </li>
                    <li class="socials-icons">
                        <a href="#" data-toggle="tooltip" title="Share in Twitter" class="twitter"><i
                                class="fa fa-twitter"></i></a>
                    </li>
                    <li class="socials-icons">
                        <a href="#" data-toggle="tooltip" title="Share in Google +" class="google-plus"><i
                                class="fa fa-google-plus"></i></a>
                    </li>
                    <li class="socials-icons">
                        <a href="#" data-toggle="tooltip" title="Share in Instagram" class="instagram"><i
                                class="fa fa-instagram"></i></a>
                    </li>
                    <li class="socials-icons">
                        <a href="#" data-toggle="tooltip" title="Share in Pinterest" class="pinterest"><i
                                class="fa fa-pinterest"></i></a>
                    </li>
                    <li class="socials-icons">
                        <a href="#" data-toggle="tooltip" title="Connect with Skype" class="skype"><i
                                class="fa fa-skype"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copy-right-text text-center">
                    &copy; Copyright 2016, Developed by OMS Team
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.plugin.js"></script>
<script type="text/javascript" src="../assets/js/jquery.datepick.js"></script>
<script src="../admin/assets/js/jquery.timepicker.min.js"></script>
<script type="text/javascript" src="../assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="../assets/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="../assets/js/wow.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

<script>
    new WOW().init();
</script>

<script>
    $(document).ready(function () {
        $("#starting-slider").owlCarousel({
            autoPlay: 3000,
            navigation: false, // Show next and prev buttons
            slideSpeed: 700,
            paginationSpeed: 1000,
            singleItem: true
        });
    });
</script>


<script>
    $(function () {
        // init Isotope
        var $container = $('.isotope').isotope
        ({
            itemSelector: '.element-item',
            layoutMode: 'fitRows'
        });


        // bind filter button click
        $('#filters').on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            // use filterFn if matches value
            $container.isotope({filter: filterValue});
        });

        // change is-checked class on buttons
        $('.button-group').each(function (i, buttonGroup) {
            var $buttonGroup = $(buttonGroup);
            $buttonGroup.on('click', 'button', function () {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $(this).addClass('is-checked');
            });
        });

    });
</script>
<script>

    $(function () {

        $('#dept').on('change',function () {
            var value= $(this).val();

            $.ajax({
                'url':'doc_name_ajax.php?value='+value,
                'type': 'get',
                'dataType': "html",
                success: function (data) {
                    $('#doc_name').html(data);
                }
            });
        });
    });
</script><script>

    $(function () {

        $('#doc_name').on('change',function () {
            var value= $(this).val();

            $.ajax({
                'url':'doc_time_ajax.php?value='+value,
                'type': 'get',
                'dataType': "json",
                success: function (data) {
                    $(function () {
                        $('.basicExample').timepicker({
                            'timeFormat': 'h:i A',
                            'minTime': data[0],
                            'maxTime': data[1],
                            'showDuration': false
                        });
                    });
                }
            });
        });
    });
</script>

<script>
    jQuery(function() {
        jQuery( "#datein" ).datepick({
            dateFormat: 'yyyy-mm-dd',
            minDate: 0,
            maxDate: +30,
            showTrigger: '#calImg'
        });
    });
</script>



</body>
</html>
 */



?>