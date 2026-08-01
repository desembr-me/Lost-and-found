<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body >
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            @include('partials.logo')
            @include('partials.sidebar')
        </div>
        <!-- End Sidebar -->

        <div class="main-panel ">
            @include('partials.header')
            {{-- @include('partials.content') --}}
            @yield('content')

            @include('partials.footer')
        </div>

        <!-- Custom template | don't include it in your project! -->
        @include('partials.theme')
        <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    @include('partials.script')
</body>

</html>