@include('header')

<div class="character-pic">
    <img src="{{$char->image ? $char->image : asset('img/charpic.jpg')}}" alt="picture not found">
</div>
<div class="character-desc">
    <p>Name: {{$char->name}}</p>
    <p>Alternate Name: 
        @if(!count($char->alternate_names))
        -
        @else
            @foreach($char->alternate_names as $altName)
            <span>{{$altName}}; </span>
            @endforeach
        @endif
    </p>
    <p>Species: {{$char->species ? $char->species : '-'}}</p>
    <p>Gender: {{$char->gender ? $char->gender : '-'}}</p>
    <p>House: {{$char->house ? $char->house : '-'}}</p>
    <p>Eye Colour: {{$char->eyeColour ? $char->eyeColour : '-'}}</p>
    <p>Hair Colour: {{$char->hairColour ? $char->hairColour : '-'}}</p>
    <p>Date of birth: {{$char->dateOfBirth ? $char->dateOfBirth : '-'}}</p>
    <p>Wizard: {{$char->wizard ? 'yes' : 'no'}}</p>
    <p>Ancestry: {{$char->house ? $char->ancestry : '-'}}</p>
    <p>Patronus: {{$char->house ? $char->patronus : '-'}}</p>
    <p>Student/Staff:
        @if ($char->hogwartsStudent)
        Student
        @elseif ($char->hogwartsStaff)
        Staff
        @else
        Neither
        @endif
    </p>
    <p>Actor: {{$char->wizard ? $char->actor : '-'}}</p>
    <p>Alive: {{$char->alive ? 'yes' : 'no'}}</p>
</div>
<div class="character-links">

</div>
@include('footer')