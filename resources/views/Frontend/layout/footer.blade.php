<footer class="footer footer-black  footer-white ">
    <div class="container">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    @foreach($Pages as $page)
                    <li>
                        <a href="{{route('page',$page->id)}}" >{{$page->name}}</a>
                    </li>
                    @endforeach
                </ul>
            </nav>

        </div>
    </div>
</footer>
<!--   Core JS Files   -->
<script src="{{asset("Frontend/assets/js/core/jquery.min.js")}}" type="text/javascript"></script>
<script src="{{asset("Frontend/assets/js/core/popper.min.js")}}" type="text/javascript"></script>
<script src="{{asset("Frontend/assets/js/core/bootstrap.min.js")}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset("Frontend/assets/js/plugins/bootstrap-switch.js")}}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset("Frontend/assets/js/plugins/nouislider.min.js")}}" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{asset("Frontend/assets/js/plugins/moment.min.js")}}"></script>
<script src="{{asset("Frontend/assets/js/plugins/bootstrap-datepicker.js")}}" type="text/javascript"></script>
<!-- Control Center for paper kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset("Frontend/assets/js/paper-kit.js?v=2.2.0")}}" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<script>
    $(document).ready(function() {

        if ($("#datetimepicker").length != 0) {
            $('#datetimepicker').datetimepicker({
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove'
                }
            });
        }

        function scrollToDownload() {

            if ($('.section-download').length != 0) {
                $("html, body").animate({
                    scrollTop: $('.section-download').offset().top
                }, 1000);
            }
        }
    });
</script>




@yield('script')
