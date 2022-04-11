{{--
INFO
-----
@section('sectionName') ... @endsection - defines a section
@section('sectionName') ... @show       - defines + yields a section
@yield('sectionName')                   - yields(displays) a section
@yield('sectionName', 'default content')- yields 'default content' if the section 'sectionName' is undefined
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

        {{--https://laracasts.com/discuss/channels/laravel/blade-hassection-what-is-it-really--}}
        @hasSection('childSection')
            <br>
            <p>hasSection parent content</p>
            @yield('childSection')
        @endif
        
        @sectionMissing('childSectionMissing')
            <br>
            <p>childSectionMissing, so here's some default content</p>
        @endif
    </body>
</html>