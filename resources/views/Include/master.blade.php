<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href={{URL::asset('public/bootstrap/css/bootstrap.min.css')}}>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href={{URL::asset('public/dist/css/AdminLTE.min.css')}}>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href={{URL::asset('public/dist/css/skins/_all-skins.min.css')}}>
    <!-- iCheck -->
    <link rel="stylesheet" href={{URL::asset('public/plugins/iCheck/flat/blue.css')}}>
    <!-- Morris chart -->
    <link rel="stylesheet" href={{URL::asset('public/plugins/morris/morris.css')}}>
    <!-- jvectormap -->
    <link rel="stylesheet" href={{URL::asset('public/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}>
    <!-- Date Picker -->
    <link rel="stylesheet" href={{URL::asset('public/plugins/datepicker/datepicker3.css')}}>
    <!-- Daterange picker -->
    <link rel="stylesheet" href={{URL::asset('public/plugins/daterangepicker/daterangepicker-bs3.css')}}>
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href={{URL::asset('public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <section class="header">
        @include('Include.header')
    </section>
    @include('Include.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>

    </div>

    <div class="row">
        <div class="col-md-12">
            @yield('box')
        </div>
    </div>

    @include('Include.footer')
    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script type="text/javascript" src={{URL::asset('public/plugins/jQuery/jQuery-2.1.4.min.js')}}></script>
<!-- jQuery UI 1.11.4 -->
<script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script type="text/javascript" src={{URL::asset('public/bootstrap/js/bootstrap.min.js')}}></script>
<!-- Morris.js charts -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script type="text/javascript" src={{URL::asset('public/plugins/morris/morris.min.js')}}></script>
<!-- Sparkline -->
<script type="text/javascript" src={{URL::asset('public/plugins/sparkline/jquery.sparkline.min.js')}}></script>
<!-- jvectormap -->
<script type="text/javascript" src={{URL::asset('public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}></script>
<script type="text/javascript" src={{URL::asset('public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}></script>
<!-- jQuery Knob Chart -->
<script type="text/javascript" src={{URL::asset('public/plugins/knob/jquery.knob.js')}}></script>
<!-- daterangepicker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script type="text/javascript" src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script type="text/javascript" src={{URL::asset('public/plugins/datepicker/bootstrap-datepicker.js')}}></script>
<!-- Bootstrap WYSIHTML5 -->
<script type="text/javascript" src={{URL::asset('public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}></script>
<!-- Slimscroll -->
<script type="text/javascript" src={{URL::asset('public/plugins/slimScroll/jquery.slimscroll.min.js')}}></script>
<!-- FastClick -->
<script type="text/javascript" src={{URL::asset('public/plugins/fastclick/fastclick.min.js')}}></script>
<!-- AdminLTE App -->
<script type="text/javascript" src={{URL::asset('public/dist/js/app.min.js')}}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script type="text/javascript" src={{URL::asset('public/dist/js/pages/dashboard.js')}}></script>
<!-- AdminLTE for demo purposes -->
<script type="text/javascript" src={{URL::asset('public/dist/js/demo.js')}}></script>
</body>
</html>
