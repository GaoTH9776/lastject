<!DOCTYPE html>

<html>

   

<head>

    @include('includes.head')

</head>



<body>

   

    <header>

        @include('includes.header')

    </header>



    <div>

        @yield('content')

    </div>



    <footer class="row">

        @include('includes.footer')

    </footer>



</body>

</html>