
@section('title', `Menu for table{{$table->id}}`)
@extends('baseLayout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/menu.css')
</head>
<body>
@section('content')
    <div id="panel">
        <div id="states">
        @switch ($table->state)
            @case(0)
                <div id="left"><h1 id="state">Reserved</h1></div>
                <div class="active"><h1 id="state">Free</h1></div>
                <div id="right"><h1 id="state">In use</h1></div>
            @break;
            @case(1)
                <div id="left" class="active"><h1 id="state">Reserved</h1></div>
                <div><h1 id="state">Free</h1></div>
                <div id="right"><h1 id="state">In use</h1></div>
            @break;
            @case(2)
                <div id="left"><h1 id="state">Reserved</h1></div>
                <div><h1 id="state">Free</h1></div>
                <div id="right" class="active"><h1 id="state">In use</h1></div>
            @break;
        @endswitch
        </div>
        <div id="id">
            <h1>Table #{{$table->id}}</h1>
        </div>
        <h1 class="center">&#128101;{{$table->numberOfSeats}}</h1>
        <h1 class="left-mid">Order</h1> <a href="/menu" class="left-mid-link"><h1>+</h1></a>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div><a id="bill" href="#">Assign Bill</a></div>
        
    </div>
@endsection
</body>
</html>