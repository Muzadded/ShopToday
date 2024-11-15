<script type="text/JavaScript">
        function confirmation(ev) {
            ev.preventDefault();

            var urlToRedirect = ev.currentTarget.getAttribute('href');

            console.log(urlToRedirect);

            swal({
                    title: "Are you sure to Delete this Category?",
                    text: "This delete will be parmanent",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })

                .then((willCancel) => {
                    if (willCancel) {
                        window.location.href = urlToRedirect;
                    }
                });
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('adminCss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('adminCss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('adminCss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('adminCss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('adminCss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('adminCss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('adminCss/js/charts-home.js')}}"></script>
    <script src="{{asset('adminCss/js/front.js')}}"></script>