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
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menu as $menuItem)
            <tr>
                <th>{{$menuItem->food_name}}</th>
                <th>
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
                </th>
                <th>{{$menuItem->food_price}}</th>
                <th><input name="{{$menuItem->id}}" type="number" min="0" max="100"/></th>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if (!isset($table))
    <select class="form-select" name="tableNumber">
        <option value="x" disabled>Choose table number</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
    </select>
    @endif
    <button type="submit">Order</button>
</form>
</div>
@endsection
