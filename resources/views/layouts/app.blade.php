    <!-- Load Header -->
    @component('components.header')
    @endcomponent

    <!-- Include Main Navigation -->
   @include('components.navigation')

    <!-- Inject Page Content -->
    @yield('content')

    <!-- Load Footer -->
    @component('components.footer')
    @endcomponent