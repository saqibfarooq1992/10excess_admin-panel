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
    <link rel="icon" type="image/png" href="./images/favicon.png">

    <link href="{{asset('assets/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="./vendor/dotted-map/css/contrib/jquery.smallipop-0.3.0.min.css" type="text/css"
        media="all">
    <!-- Style css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- Datatable -->
    <link href="{{asset('assets/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{asset('assets/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('assets/css/style.css')}}" rel="stylesheet"> -->
    <!-- Add this script tag in the head of your HTML document -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body class="vh-100">
    {{ $slot }}
</body>

</html>