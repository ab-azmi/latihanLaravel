<!-- Bootstrap core JavaScript-->
@vite('public/assets/vendor/jquery/jquery.min.js')
@vite('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')

<script src="{{ asset('public/assets/vendor/jquery/jquery.min.js') }}"></script>

<!-- Core plugin JavaScript-->
@vite('public/assets/vendor/jquery-easing/jquery.easing.min.js')

<!-- Custom scripts for all pages-->
@vite('public/assets/js/sb-admin-2.min.js')

<!-- Page level plugins -->
@vite('public/assets/vendor/chart.js/Chart.min.js')

<!-- Page level custom scripts -->
@vite('public/assets/js/demo/chart-area-demo.js')
@vite('public/assets/js/demo/chart-pie-demo.js')

@stack('page-script')