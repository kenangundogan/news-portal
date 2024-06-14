<!DOCTYPE html>

<html lang="zxx">
    <head>
        @includeIf('cms.master.parts.head')
    </head>
    <body class="font-poppins">
        @includeIf('cms.master.layout.header')
        @includeIf('cms.master.layout.menu')
        <main class="relative overflow-hidden bg-gray-50">
            @yield('content')
        </main>
        @includeIf('cms.master.layout.footer')
        @includeIf('cms.master.parts.foot')
    </body>
</html>
