@extends('baseLayout')

@section('title',`Bill for table{{$table->id}}`)
@section('content')

<div id="panel" class="billPanel">
    <h1>Cherry Blossom Diner</h1>
    <h2>Bill</h2>
    <span>Table number: {{$table->id}}</span>
    <span>Waiter/Waitress: {{Auth::user()->getName($table->user_id)}}</span>
    <h2>Items</span>
    <table>
        <tr>
            <th>Item name</th>
            <th>amount</th>
            <th>price</th>
        </tr>
        @foreach ($table->menus as $food)
            @foreach ($food->amount as $f)
                @if($food->id == $f->pivot->menu_id)
                    <tr>
                        <td>{{$food->food_name}}</td>
                        <td>{{$f->pivot->amount}}</td>
                        <td>{{$f->pivot->amount * $food->food_price}}$</td>
                    </tr>
                @endif
            @endforeach
        @endforeach
    </table>
    <span>Food price: {{$table->currentBill()}}$</span>
    <span>Service fee(10%): {{$table->currentBill()*0.1}}$</span>
    <span>Total: {{$table->currentBill()*1.1}}$</span>
    <h2>Thank you!</h2>

    <form method="post" action="{{ isset($table) ? route('tables.destroy', ['table' => $table->id]) : '' }}" enctype="multipart/form-data"path>
        @csrf
        @method('delete')
        <button type="submit">Pay</button>
    </form>
    <a id="backBtn" class="billBack" href="{{ route('tables.show', ['table' => $table->id]) }}">&#171</a>
@endsection
