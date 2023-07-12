<!DOCTYPE html>
<html class="dark">
    @include('_partials.head')
    <body>
        <div id="app">
            @include('_partials.nav')
            @yield('content')
            @include('_partials.alerts')
        </div>
    </body>
</html>



