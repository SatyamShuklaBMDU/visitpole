<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('admin.include.head')
    @yield('style-area')
</head>
<body>
    @include('admin.include.header')
    <hr>
    <div class="container">
        <div class="row">
            @include('admin.include.sidebar')
            @yield('content-area')
        </div>
    </div>
    <hr>
    @yield('script-area')
    @include('admin.include.footer')
    @include('admin.include.foot')
</body>
</html>
