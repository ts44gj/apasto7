<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('common.user_head')
<body>
    <div id="app">
        @include('common.user_navbar')
    </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
