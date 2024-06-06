<!DOCTYPE html>

<html lang="en">
    <head>
        @includeIf('master.parts.head')
    </head>
    <body class="font-poppins">
        @includeIf('master.layout.header')
        <main class="relative overflow-hidden">
            @yield('content')
        </main>
        @includeIf('master.layout.footer')
        @includeIf('master.parts.foot')
    </body>
</html>
