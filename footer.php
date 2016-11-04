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

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="assets/js/wow.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

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
</script>

</body>
</html>
