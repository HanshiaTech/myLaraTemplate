<!DOCTYPE html>
<html>
    <head>
        @include('includes.meta')

        <title>@yield('title') | MyLaraTemplate - </title>
        
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/ico" />
        @stack('before-style')
        <!-- Style -->
        @include('includes.style')

        @stack('after-style')
    </head>

    <body>
        @yield('content')   
        @stack('before-script')
        <!-- Script -->
        @include('includes.script')

        @stack('after-script')
    </bo