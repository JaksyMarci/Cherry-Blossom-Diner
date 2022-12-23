@extends('baseLayout')

@section('title', isset($table) ? `Menu for table{{$table->id}}` : 'Menu')
@section('content')
@if (isset($table))
    <h1>{{$table->id}}</h1>
@endif
<form method="post" action="{{ isset($table) ? route('tables.update', ['table' => $table->id]) : '' }}" enctype="multipart/form-data"path>
    @csrf
    @method('put')
    <table>
        <thead>
            <tr>
                <th>Food name</th>
                <th>Type</th>
                <th>Price</th>
                @if (isset($table))
                    <th>Amount</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($menu as $menuItem)
                <tr>
                    <td>{{$menuItem->food_name}}</td>
                    <td>
                    @switch($menuItem->food_type)
                        @case(0)
                            Soup
                            @break
                        @case(1)
                            Vegetarian
                            @break
                        @case(2)
                            Poultry
                            @break
                        @case(3)
                            beef
                            @break
                        @case(4)
                            Pork
                            @break
                        @case(5)
                            Dessert
                            @break
                        @case(6)
                            Drink
                            @break
                        @default
                            no category
                    @endswitch
                    </td>
                    <td>{{$menuItem->price}}</td>
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
                </tr>
            @endforeach
        </tbody>
    </table>
    @if (isset($table))
        <button type="submit">Order</button>
    @else
        <h1>You can order by clicking on a table's order buttom=n</h1>
    @endif
</form>
</div>
@endsection
