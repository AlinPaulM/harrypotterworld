@include('header')
<div class="text-center title">
    @if(Request::segment(1) === 'all')
        All Characters
    @elseif(Request::segment(1) === 'students')
        Students
    @elseif(Request::segment(1) === 'staff')
        Staff
    @elseif(Request::segment(1) === 'house')
        {{ucfirst(Request::segment(2))}} House
    @endif
</div>

@foreach($data as $id => $char)
    <div class="character">
        <a href="{{Request::url()}}/{{$id}}">
            <img src="{{$char->image ? $char->image : asset('img/charpic.jpg')}}" alt="picture not found">
        </a>
        <p>Name: {{$char->name}}</p>
        <p>House: {{$char->house}}</p>
        <p>Student/Staff:
            @if ($char->hogwartsStudent)
                Student
            @elseif ($char->hogwartsStaff)
                Staff
            @else
                Neither
            @endif
        </p>
    </div>
@endforeach

@include('footer')