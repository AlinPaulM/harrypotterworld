{{--
/*
INFO
-----
@section('sectionName') ... @endsection - defines a section
@section('sectionName') ... @show       - defines + yields a section
@yield('sectionName')                   - yields(displays) a section
@yield('sectionName', 'default content')- yields 'default content' if the section 'sectionName' is undefined
*/
--}}
<html>
    <head>
        <title>@yield('title', 'default title')</title>
    </head>
    <body>
        @section('sidebar')
            parent section content
        @show
 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>