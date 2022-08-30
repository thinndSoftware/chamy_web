<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.layouts.head')
</head>

<body>
    <div id="preloder" style="display: none;">
        <div class="loader" style="display: none;"></div>
    </div>
    @include('client.layouts.headerT')
    @yield('content')
    @include('client.layouts.footer')
    @include('client.layouts.js')
</body>

</html>
