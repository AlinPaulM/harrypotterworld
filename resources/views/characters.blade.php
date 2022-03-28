@include('header')
<div class="text-center title">All Characters</div>

<?php
    // echo '<pre>';
    // var_dump($data);
    // echo '</pre>';
?>
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