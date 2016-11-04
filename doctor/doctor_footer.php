<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        2014 - Alvarez.is
        <a href="blank.html#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="../assets/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="../assets/js/wow.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>



<script>
    $(document).ready(function() {
        $( "#datein" ).datepicker({

        });

    });
</script>
<script>

    $(function () {

        $('.all').on('click',function () {




            $.ajax({
                'url':'search_appointment.php?all=all',
                'type': 'get',
                'dataType': "html",
                success: function (data) {
                    $('.ajax').html(data);
                }
            });
        });
    });


    $(function () {

        $('.today').on('click',function () {

            var d = new Date();

            var month = d.getMonth()+1;
            var day = d.getDate();
            var year=d.getFullYear();
            var date = month + '/' + day+'/'+year ;


           // var date =
                ((''+month).length<2 ? '0' : '') + month + '/' +
                ((''+day).length<2 ? '0' : '') + day+'/'+year ;



            $.ajax({
                'url':'search_appointment.php?date='+date,
                'type': 'get',
                'dataType': "html",
                success: function (data) {
                    $('.ajax').html(data);
                }
            });
        });
    });


    $(function () {

        $('#datein').on('change',function () {

            var date= $(this).val();
            $('.user').val('');


            $.ajax({
                'url':'search_appointment.php?date='+date,
                'type': 'get',
                'dataType': "html",
                success: function (data) {
                    $('.ajax').html(data);
                }
            });
        });
    });


    $(function () {

        $('.user').on('keyup',function () {

            var user=$(this).val();
            $('#datein').val('');



            $.ajax({
                'url':'search_appointment.php?user='+user,
                'type': 'get',
                'dataType': "html",
                success: function (data) {
                    $('.ajax').html(data);
                }
            });
        });
    });
</script>

</body>
</html>

