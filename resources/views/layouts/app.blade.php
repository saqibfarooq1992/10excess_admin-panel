<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Title -->
    <title>10eXcess - Real Estate CRM</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="">

    <meta name="keywords"
        content="admin dashboard, admin template, administration, analytics, bootstrap, broker, medical dashboard, modern, property, property admin, real estate, responsive admin dashboard">
    <meta name="description"
        content="Griya is a premier real estate development that offers a range of high-quality residential properties designed to meet the diverse needs and preferences of buyers. With its commitment to excellence and attention to detail, Griya has established itself as a trusted brand in the real estate industry.">

    <meta property="og:title" content="Griya - Real Estate Admin & Dashboard Bootstrap 5 Template">
    <meta property="og:description"
        content="Griya is a premier real estate development that offers a range of high-quality residential properties designed to meet the diverse needs and preferences of buyers. With its commitment to excellence and attention to detail, Griya has established itself as a trusted brand in the real estate industry.">
    <meta property="og:image" content="https://griya.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">

    <link href="{{asset('assets/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/vendor/dotted-map/css/contrib/jquery.smallipop-0.3.0.min.css')}}" type="text/css"
        media="all">
    <!-- Style css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- Datatable -->
    <link href="{{asset('assets/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{asset('assets/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">


</head>

<body>
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    
        <div id="main-wrapper">
            @include('layouts.navigation')
            <!-- Page Heading -->
            @include('layouts.sidebar')

            

            <!-- Page Content -->
            <main class="content-body">
                {{ $slot }}
            </main>
            <!--**********************************
                Footer start
            ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">NSOL BPO</a> 2023</p>
                </div>
            </div>
            <!--**********************************
                Footer end
            ***********************************-->
        </div>
        <!--**********************************
        Scripts
        ***********************************-->
        <!-- Required vendors -->
        <script src="{{asset('assets/vendor/global/global.min.js')}}"></script>

        <script src="{{asset('assets/vendor/chart.js/Chart.bundle.min.js')}}"></script>
        <script src="{{asset('assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>

        <!-- Apex Chart -->
        <script src="{{asset('assets/vendor/apexchart/apexchart.js')}}"></script>

        <!-- Chart piety plugin files -->
        <script src="{{asset('assets/vendor/peity/jquery.peity.min.js')}}"></script>

        <!-- Dashboard 1 -->
        <script src="{{asset('assets/js/dashboard/dashboard-1.js')}}"></script>

        <!-- JS for dotted map -->
        <script src="{{asset('assets/vendor/dotted-map/js/contrib/jquery.smallipop-0.3.0.min.js')}}"></script>
        <script src="{{asset('assets/vendor/dotted-map/js/contrib/suntimes.js')}}"></script>
        <script src="{{asset('assets/vendor/dotted-map/js/contrib/color-0.4.1.js')}}"></script>

        <script src="{{asset('assets/vendor/dotted-map/js/world.js')}}"></script>
        <script src="{{asset('assets/vendor/dotted-map/js/smallimap.js')}}"></script>
        <script src="{{asset('assets/js/dashboard/dotted-map-init.js')}}"></script>



        <script src="{{asset('assets/js/custom.min.js')}}"></script>
        <script src="{{asset('assets/js/deznav-init.js')}}"></script>

        <!-- Datatable -->
        <script src="{{asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins-init/datatables.init.js')}}"></script>
</body>

</html>