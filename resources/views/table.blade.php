@extends('baseLayout')

@section('title',`Menu for table{{$table->id}}`)
@section('content')

<div id="panel">
        <div id="states">
        @switch ($table->state)
            @case(0)
                <form method="post" action="{{ route('tables.update', ['table' => $table->id]) }}" enctype="multipart/form-data"path>
                    @csrf
                    @method('put')
                    <div id="left"><button type="submit" value="1" name="state"><h1>Reserved</h1></button></div>
                </form>
                <div class="active"><h1>Free</h1></div>
                <form method="post" action="{{ route('tables.update', ['table' => $table->id]) }}">
                    @csrf
                    @method('put')
                    <div id="right"><button type="submit" value="2" name="state"><h1>In use</h1></button></div>
                </form>
                @break;
            @case(1)
            <div class="active" id="left"><h1>Reserved</h1></div>
            <form method="post" action="{{ route('tables.update', ['table' => $table->id]) }}" enctype="multipart/form-data"path>
                @csrf
                @method('put')
                <div><button type="submit" value="0" name="state"><h1>Free</h1></button></div>
            </form>
            <form method="post" action="{{ route('tables.update', ['table' => $table->id]) }}">
                @csrf
                @method('put')
                <div id="right"><button type="submit" value="2" name="state"><h1>In use</h1></button></div>
            </form>
            @break;
            @case(2)
            <form method="post" action="{{ route('tables.update', ['table' => $table->id]) }}" enctype="multipart/form-data"path>
                @csrf
                @method('put')
                <div id="left"><button type="submit" value="1" @if(count($table->menus) != 0) @disabled(true) @endif name="state"><h1>Reserved</h1></button></div>
            </form>
            <form method="post" action="{{ route('tables.update', ['table' => $table->id]) }}" enctype="multipart/form-data"path>
                @csrf
                @method('put')
                <div><button type="submit" value="0" @if(count($table->menus) != 0) @disabled(true) @endif name="state"><h1>Free</h1></button></div>
            </form>
            <div class="active" id="right"><h1>In use</h1></div>
            @break;
        @endswitch
        </div>
        <div id="data">
            <h1>Table #{{$table->id}}</h1>
            <h1>&#128101;{{$table->numberOfSeats}}</h1>
        </div>
        @if($table->state != 0)
            <h1 id="noFood">Waiter/waitress: {{$user->getName($table->user_id)}}</h1>
        @endif
        <div id="orderBox">
            <h1 class="left-mid">Order</h1>
            <a href="{{ route('menu.show', ['menu' => $table->id])}}" class="left-mid-link"><h1>+</h1></a>
            @if(count($table->menus) == 0)
                <br>
                <h1 id="noFood">No food ordered to this table yet.</h1>
            @else
                <ul id="overflowList">
                    @foreach ($table->menus as $food)
                    <li id="type{{$food->food_type}}" class="menuImage centered">
                    <p>{{$food->food_name}}</p>
                        @foreach ($food->amount as $f)
                            @if($food->id == $f->pivot->menu_id)
                                <pre>{{$f->pivot->amount}}</pre>
                            @endif
                        @endforeach
                    </li>
                    @endforeach
                </ul>
                
                <h1 id="noFood">Current total: {{$table->currentBill()}}$</h1>
            @endif
        </div>
        <div id="btnHolder"><a id="backBtn" href="{{ route('tables.index')}}">&#171</a>
        @if(count($table->menus) != 0)
            <a id="okBtn" href="#">Save</a><a id="billBtn" href="{{ route('tables.bill', ['table' => $table->id])}}">Bill</a></div>
        @endif
</div>
@endsection
