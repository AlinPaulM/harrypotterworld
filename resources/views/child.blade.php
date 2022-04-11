{{--
INFO
-----
@extends('layoutName')                                          - extends a layout
@section('sectionName') [section content] @endsection           - displays [section content] (overwrites parent content)
@section('sectionName') @parent [section content] @endsection   - displays @parent content and [section content]
    -P.S. eu: sections that are defined in the parent template with @hasSection, should NOT use @parent in the child template - it does NOT work properly(if your child section's content is only '@parent', then nothing will be displayed; the order of content vs '@parent' is not respected; etc)

P.S. ALWAYS check the rendered DOM - if you use these directives wrong, it all gets messed up
--}}

@extends('layouts.app')

@section('titlex', 'Page title')

@section('sidebar')
    @parent
    <p>child section content</p>
@endsection

@section('content')
    <p>body content.</p>
@endsection

@section('childSection')
<p>hasSection child content</p>
@endsection