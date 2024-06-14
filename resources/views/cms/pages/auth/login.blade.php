<!DOCTYPE html>

<html lang="en">
    <head>
        @includeIf('cms.master.parts.head')
    </head>
    <body class="font-poppins">
        <main class="relative overflow-hidden bg-gray-50 flex justify-center items-center min-h-screen p-8">
            <div class="w-full max-w-md">
                <img src="{{ asset('images/logo/black/logo.svg') }}" alt="logo" class="h-8 m-auto mb-4">
                <div class="w-full p-8 md:p-12 shadow-lg bg-white">
                    <x-cms.base.form id="form" name="form" :action="route('login')" method="POST" class="grid gap-4">
                        <x-cms.base.input type="text" id="email" name="email" value="{{ old('email') }}" label="Email" />
                        <x-cms.base.input type="password" id="password" name="password" value="{{ old('password') }}" label="Password" />
                        <x-cms.base.button type="submit" mission="entry" id="login" name="login" title="login" content="Log in" />
                    </x-cms.base.form>
                </div>
            </div>
        </main>
        @includeIf('cms.master.parts.foot')
    </body>
</html>
