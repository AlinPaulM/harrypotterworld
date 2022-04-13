<x-alert-two>
    <x-slot:title>
        title slot
        <p>{{$component->fct()}}</p>
        <p>{{$component->nonRequired}}</p>
    </x-slot>
    
    <br>
    <p>slot</p>
    <p>{{$component->fct()}}</p>
    <p>{{$component->nonRequired}}</p>
</x-alert-two>