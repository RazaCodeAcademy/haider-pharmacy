<!DOCTYPE html>
<html lang="en">

    {{-- left sidebar included --}}
    @include('backend.layouts.head')

    <body class="theme-red">
         
        {{-- page loader included --}}
        @include('backend.layouts.loader')
        
        {{-- left sidebar included --}}
        @include('backend.layouts.left-sidebar')

        {{-- right sidebar included --}}
        @include('backend.layouts.right-sidebar')
        
        {{-- header included --}}
        @include('backend.layouts.header')

        {{-- content yield --}}
        @yield('content')

        {{-- scripts included --}}
        @include('backend.layouts.scripts')

    </body>

</html>