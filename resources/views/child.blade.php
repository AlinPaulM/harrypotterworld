{{--
/* 
INFO
-----
@extends('layoutName')                                          - extends a layout
@section('sectionName') [section content] @endsection           - displays [section content] (overwrites parent content)
@section('sectionName') @parent [section content] @endsection   - displays @parent content and [section content]
*/
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