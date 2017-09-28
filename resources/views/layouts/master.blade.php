<!doctype html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>

<div class="wrapper">
    
    @include('layouts.nav')

    <div class="main-panel">
        
        @include('layouts.topnav')

        @yield('content')

        <footer class="footer">
            @include('layouts.footer')
        </footer>

    </div>
</div>

@include('layouts.scripts')

</body>
</html>
