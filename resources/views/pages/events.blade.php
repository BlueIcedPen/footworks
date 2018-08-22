<!doctype html>
<html>

    <head>
        @include('pages.includes.head')
    </head>

    <body class="events-page">

        <div class="wrapper">
            <header class="header">
                @include('pages.includes.header')
            </header>

            <nav class="main-nav" role="navigation">
                @include('pages.includes.nav')
            </nav>

            <div id="main" class="content container">

                    @yield('content')

            </div>
        </div>
        <footer class="footer">
            @include('pages.includes.footer')
        </footer>
        @include('pages.includes.config')
    </body>

</html>