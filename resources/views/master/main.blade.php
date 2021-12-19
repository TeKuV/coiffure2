<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Impperial</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    <!-- Subscribe Modal -->
    @include('master.suscribe_modal')

    <!-- ##### Header Area Start ##### -->

    @include('master.header.header')
    <!-- ##### Header Area End ##### -->

    @yield('content')

    <!-- ##### Instagram Feed Area Start ##### -->
    {{-- @include('master.scroll_aera') --}}
    <!-- ##### Instagram Feed Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('master.footer')
    <!-- ##### Footer Area End ##### -->

    @include('master.scripts')
</body>

</html>
