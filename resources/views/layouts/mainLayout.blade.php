<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>

    {{-- Top Bar --}}
    <div id="topbar" class="d-flex align-items-center fixed-top">
      @include('partials.topbar')
    </div>

    {{-- Heading Menu --}}
    <header id="header" class="fixed-top">
        @include('partials.menu')
    </header>

    {{-- Hero Section --}}
    @yield('hero')

    <main id="main">
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        @include('partials.footer')
    </footer>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    {{-- Main Script Files --}}
    @include('partials.scripts')

    {{-- Custom Scripts --}}
    @yield('scripts')

</body>

</html>
