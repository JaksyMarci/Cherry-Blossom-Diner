@extends('baseLayout')

@section('title', `Menu for table{{$table->id}}`)

@section('content')

<h1>{{$table->id}}</h1>
<h1>{{$table->numberOfSeats}}</h1>

    @switch ($table->state)
        @case(0)
            <h1>Szabad</h1>
            @break;
        @case(1)
            <h1>Foglalt</h1>
            @break;
        @case(2)
            <h1>Használatban</h1>
            @break;
    @endswitch
@endsection
