<!DOCTYPE html>
<html lang="en">
        <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> @yield('title') </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ Module::asset('admin:css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ Module::asset('admin:css/light-bootstrap-dashboard.css?v=2.0.0')}} " rel="stylesheet" />
</head>

    </head>
    <body>
        @include('admin::layouts.sidebar')
        @yield('content')

        </div>
        
<script src="{{ Module::asset('admin:js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ Module::asset('admin:js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ Module::asset('admin:js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ Module::asset('admin:js/plugins/bootstrap-switch.js') }}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{ Module::asset('admin:js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ Module::asset('admin:js/plugins/bootstrap-notify.js') }} "></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{ Module::asset('admin:js/light-bootstrap-dashboard.js?v=2.0.0') }} " type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>
    </body>
</html>
