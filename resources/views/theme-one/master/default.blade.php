<!DOCTYPE html>

<html lang="en">
    <head>
        @includeIf('theme-one.master.parts.head')
    </head>
    <body class="font-poppins">
        @includeIf('theme-one.master.layout.header')
        @includeIf('theme-one.master.layout.search')
        @includeIf('theme-one.master.layout.mega-menu')
        <main class="relative overflow-hidden bg-gray-50">
            @yield('content')
        </main>
        @includeIf('theme-one.master.layout.back-to-top')
        @includeIf('theme-one.master.layout.footer')
        @includeIf('theme-one.master.parts.foot')
    </body>
</html>
