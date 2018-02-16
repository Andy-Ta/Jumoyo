<!DOCTYPE html>
<html>
    <head>
        @include('includes.business.head')
        @include('includes.head')
    </head>

    <body>
        @include('includes.business.navbar')
        @include('includes.business.header')

        @yield('content')

        @include('includes.business.footer')
    </body>
</html>