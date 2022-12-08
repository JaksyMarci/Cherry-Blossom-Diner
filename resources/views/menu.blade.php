@extends('baseLayout')

@section('title', isset($table) ? `Menu for table{{$table->id}}` : 'Menu')
@section('content')

@if(isset($table))
    <h1>{{$table->id}}</h1>
    <h1>{{$table->numberOfSeats}}</h1>
    @switch ($table->state)
        @case(0)
            <div id="active">
                <h1>Szabad</h1>
            </div>
            <div>
                <h1>Foglalt</h1>
            </div>
            <div>
                <h1>Használatban</h1>
            </div>
            @break;
        @case(1)
        <div>
            <h1>Szabad</h1>
        </div>
        <div  id="active">
            <h1>Foglalt</h1>
        </div>
        <div>
            <h1>Használatban</h1>
        </div>
            @break;
        @case(2)
        <div>
            <h1>Szabad</h1>
        </div>
        <div>
            <h1>Foglalt</h1>
        </div>
        <div id="active">
            <h1>Használatban</h1>
        </div>
            @break;
    @endswitch
@endif
    <table>
        <thead>
            <tr>
                <th>Étel neve</th>
                <th>Étel tipusa</th>
                <th>Ár</th>
                <th>Mennyiség</th>
                <th>Hozzáadás</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menu as $menuItem)
            <tr>
                <th>{{$menuItem->food_name}}</th>
                <th>{{$menuItem->food_type}}</th>
                <th>{{$menuItem->food_price}}</th>
                <th>0</th>
                <th><button>Hozzáadás</button></th>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
