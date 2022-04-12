<div class="alert alert-{{ $alertType }}">
    {{ $message }}
    <br>
    {{ $fct(true) }}
    <br><br>
    {{$nonRequired}}
</div>


<br><br>
<!-- if you need all attributes added -->
<div {{$attributes}}>this div has all the attributes applied to it, check out the component's view and the DOM</div>

<div {{$attributes->merge(['class' => 'alert', 'id' => 'defaultId', 'new'=>'val'])}}>
    $attributes-merge() - check out the DOM and the component's view
        <!-- -class attributes are merged
        -attributes that exist in the component(here 'id') are overwritten
        -new attributes(here 'new') are added
        -attributes that only exist in the component(here 'data') are added     -->
</div>

<br>
<div {{ $attributes->class(['always-add-this-class', 'add-this-class' => true, 'add-this-class-too' => false]) }}>
    $attributes-class() also adds all attributes, but now you can add new classes conditionally
</div>
<div {{ $attributes->class(['p-4'])->merge(['id' => 'idval']) }}>
    $attributes-class()->merge() also adds all attributes but it adds new classes conditionally, and it adds other attributes thru merge()
</div>
<i>If you need to conditionally compile classes on other HTML elements that shouldn't receive merged attributes, you can use the @@class directive: <a href="https://laravel.com/docs/9.x/blade#conditionally-merge-classes">https://laravel.com/docs/9.x/blade#conditionally-merge-classes</a></i>

<br><br>
<div {{ $attributes->merge(['data' => $attributes->prepends('value2')]) }}>
    $attributes->prepends
</div>


<br><br>
<!-- if you only need 1 attribute added -->
<div id="{{$attributes->get('id')}}">
    $attributes->get('id')
</div>
<!-- if you need some attributes added -->
<div {{ $attributes->whereStartsWith('dat') }}>
    $attributes->whereStartsWith('dat')
</div>
<div {{ $attributes->whereDoesntStartWith('da') }}>
    $attributes->whereDoesntStartWith('da')
</div>

<br><br>
@if ($attributes->has('class'))
    <div>Class attribute is present</div>
@endif