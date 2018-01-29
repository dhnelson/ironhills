<!DOCTYPE HTML>
<html lang="eng">
    <head>
        @include('layouts.head')
    </head>

<body>

        @include('layouts.analyticstracking')

        @include('flash')

        @include('layouts.navigation')

        @include('errors.error')

        <main role="main">

        <div class="container-fluid">

        @yield('content')

        </div>

        </main>

        @include('layouts.footer')

</body>
</html>
