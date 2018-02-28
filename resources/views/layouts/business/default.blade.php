<!DOCTYPE html>
<html>
    <head>
        @include('includes.business.head')
        @include('includes.head')
    </head>

    <body>
        @include('includes.navbar')
        @include('includes.searchbar')
        @yield('content')

        @include('includes.business.footer')
    </body>
</html>