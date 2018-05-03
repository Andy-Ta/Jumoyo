<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.business.head')
    </head>

    <body class="fixed-nav sticky-footer" id="page-top">
        @include('includes.business.navbar')

        @yield('content')

        @include('includes.business.footer')
    </body>
</html>