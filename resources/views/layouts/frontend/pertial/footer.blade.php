
<!-- Footer Section Start -->
<footer class="footer">
    <div class="row no-padding">
        <div class="container">
            <div class="col-md-6 col-sm-12">
                <div class="footer-widget">
                    <h3 class="widgettitle widget-title">About the company</h3>
                    <div class="textwidget">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                        <p>7860 North Park Place<br>
                            San Francisco, CA 94120</p>
                        <p><strong>Email:</strong> Support@careerdesk</p>
                        <p><strong>Call:</strong> <a href="tel:+15555555555">555-555-1234</a></p>
                        <ul class="footer-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>



            <div class="col-md-6 col-sm-4">
                <div class="footer-widget">
                    <h3 class="widgettitle widget-title">Connect Us</h3>
                    <div class="textwidget">
                        <form class="footer-form">
                            <input type="text" class="form-control" placeholder="Your Name">
                            <input type="text" class="form-control" placeholder="Email">
                            <textarea class="form-control" placeholder="Message"></textarea>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row copyright">
        <div class="container">
            <p> © 2017. All Rights Reserved </p>
        </div>
    </div>
</footer>
<div class="clearfix"></div>
<!-- Footer Section End -->




<!-- Scripts
================================================== -->
<script type="text/javascript" src="{{ asset('public/assets/fontend/plugins/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/fontend/plugins/js/viewportchecker.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/fontend/plugins/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/fontend/plugins/js/bootsnav.js') }}"></script>
{{--<script type="text/javascript" src="{{ asset('public/assets/fontend/plugins/js/select2.min.js') }}"></script>--}}
<script type="text/javascript" src="{{ asset('public/assets/fontend/plugins/js/wysihtml5-0.3.0.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/fontend/plugins/js/bootstrap-wysihtml5.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/fontend/plugins/js/datedropper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/fontend/plugins/js/dropzone.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/fontend/plugins/js/loader.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/fontend/plugins/js/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/fontend/plugins/js/gmap3.min.js') }}"></script>

<!-- Custom Js -->
{{--<script src="{{asset('public/assets/fontend/js/custom.js')}}"></script>--}}
<script src="{{asset('public/assets/fontend/js/jQuery.style.switcher.js')}}"></script>
<script src="{{asset('public/assets/fontend/js/chosen.jquery.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#styleOptions').styleSwitcher();
    });
</script>
<script>
    function openRightMenu() {
        document.getElementById("rightMenu").style.display = "block";
    }

    function closeRightMenu() {
        document.getElementById("rightMenu").style.display = "none";
    }
</script>
</div>
</body>

</html>
