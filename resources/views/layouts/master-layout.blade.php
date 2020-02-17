<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('includes.head')
    </head>

    <body>
        <div class="page text-center">
            <header class="page-head">
                @include('includes.header')
                @yield('slider')
            </header>
            <main class="page-content section-98 section-sm-110">
                {{-- id="main" --}}
                @yield('content')
            </main>
            <footer>
                @include('includes.footer')
            </footer>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="{{ asset('js/core.min.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('js/tillmac-hair.js') }}"></script>
    </body>

</html>