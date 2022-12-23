@extends('baseLayout')

@section('title', isset($table) ? `Menu for table{{$table->id}}` : 'Menu')
@section('content')
<div id="panel" class="scrollable">
@if (isset($table))
    <div id="data">
        <h1>Table #{{$table->id}}</h1>
    </div>
@endif
<form method="post" action="{{ isset($table) ? route('tables.update', ['table' => $table->id]) : '' }}" enctype="multipart/form-data"path>
    @csrf
    @method('put')
    <ul>
        @foreach ($menu as $menuItem)
        <li id="type{{$menuItem->food_type}}" class="menuImage">
            <p>{{$menuItem->food_name}}</p>
            <div>
                <p>§{{$menuItem->food_price}}</p>
                @if (isset($table))
                    @if($menuItem->amount->count() == 0)
                        <td><input name="{{$menuItem->id}}" type="number" min="0" max="100" value="0"/></td>
                    @endif
                    @foreach ($menuItem->amount as $amount)
                        @if($amount->pivot->menu_id == $menuItem->id && $amount->pivot->table_id == $table->id)
                            <td><input name="{{$menuItem->id}}" type="number" min="0" max="100" value="{{$amount->pivot->amount}}"/></td>
                        @else
                            <td><input name="{{$menuItem->id}}" type="number" min="0" max="100" value="0"/></td>
                        @endif
                    @endforeach
                @endif
            </div>
        </li>
        @endforeach
    </ul>
    @if (isset($table))
        <div id="orderButtonBox"><button id="backBtn" type="submit">Order</button></div>
    @else
        <h2 id="orderText">You can order by clicking on a table's order button</h2>
    @endif
    
</form>
</div>
@endsection