<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BG Football Academy</title>
    <link rel="shortcut icon" href="{{asset('assets/img/logo/logo.jpeg')}}">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/admin/plugins/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/admin/plugins/feather/feather.css')}}">

    {{-- <link rel="stylesheet" href="{{asset('assets/admin/plugins/icons/flags/flags.css')}}"> --}}


    <link rel="stylesheet" href="{{asset('assets/admin/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/datatables/datatables.min.css') }}">


    <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
    @stack('css')
</head>
<body>
<div class="main-wrapper">
    @include('admin.includes.header')
    @include('admin.includes.sidebar')

    <div class="page-wrapper">
        @yield('content')
        @include('admin.includes.footer')
    </div>

</div>

<script src="{{asset('assets/admin/js/jquery-3.6.0.min.js')}}"></script>

<script src="{{asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/admin/js/feather.min.js')}}"></script>

<script src="{{asset('assets/admin/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script> 
{{-- {{ --  <script src="{{asset('assets/admin/plugins/apexchart/apexcharts.min.js')}}"></script> --}} a
<script src="https://cdn.ckeditor.com/4.17.2/full/ckeditor.js"></script>
<script src="{{ asset('assets/admin/plugins/datatables/datatables.min.js') }}"></script>
<script src="{{asset('assets/admin/js/script.js')}}"></script>
@yield('js')
</body>
</body>
</html>