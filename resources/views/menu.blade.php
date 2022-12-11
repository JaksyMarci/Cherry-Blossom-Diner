@extends('baseLayout')

@section('title', isset($table) ? `Menu for table{{$table->id}}` : 'Menu')
@section('content')


@if(isset($table))
<div id="panel">
        <div id="states">
        @switch ($table->state)
            @case(0)
                <div id="left"><h1>Reserved</h1></div>
                <div class="active"><h1>Free</h1></div>
                <div id="right"><h1>In use</h1></div>
            @break;
            @case(1)
                <div id="left" class="active"><h1>Reserved</h1></div>
                <div><h1>Free</h1></div>
                <div id="right"><h1>In use</h1></div>
            @break;
            @case(2)
                <div id="left"><h1>Reserved</h1></div>
                <div><h1>Free</h1></div>
                <div id="right" class="active"><h1>In use</h1></div>
            @break;
        @endswitch
        </div>
        <div id="data">
            <h1>Table #{{$table->id}}</h1>
            <h1>&#128101;{{$table->numberOfSeats}}</h1>
        </div>
        <div id="orderBox">
            <h1 class="left-mid">Order</h1> 
            <a href="/menu" class="left-mid-link"><h1>+</h1></a>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div id="btnHolder"><a id="backBtn" href="{{ route('tables.index')}}">&#171</a><a id="okBtn" href="#">Save</a><a id="billBtn" href="#">Bill</a></div>
        
</div>
@elseif(!isset($table))
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
@endif
@endsection
