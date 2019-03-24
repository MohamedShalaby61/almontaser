<!DOCTYPE html>
<html @if(App::getLocale() == 'ar') dir="rtl" @endif >
<head>
    <meta charset="utf-8">
    <META http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    @include('commonmodule::includes.css')

</head>

<body class="hold-transition skin-blue-light sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

@include('commonmodule::includes.header')
<!-- =============================================== -->
@include('commonmodule::includes.aside')
<!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @yield('content-header')

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('commonmodule::includes.footer')


</div>
<!-- ./wrapper -->

@include('commonmodule::includes.js')

</body>
</html>
