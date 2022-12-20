@extends('baseLayout')

@section('content')
	<p class="wide-hidden">Oh wow look at you <br> with your 22/9 or above <br> aspect ratio</p>
    <div id="myImage">
        @foreach ($tables as $table)
            @if ($table->id < 9)
                @switch($table->state)
                    @case(0)
                    <a href="{{ route('tables.show', ['table' => $table->id]) }}" id="nm{{$table->id}}"><span>{{$table->id}}</span></a>
                    @break
                    @case(1)
                    <a href="{{ route('tables.show', ['table' => $table->id]) }}" id="nm{{$table->id}}" class="reserved"><span>{{$table->id}}</span></a>
                    @break
                    @case(2)
                    <a href="{{ route('tables.show', ['table' => $table->id]) }}" id="nm{{$table->id}}" class="taken"><span>{{$table->id}}</span></a>
                    @break
                @endswitch
            @else
                @switch($table->state)
                    @case(0)
                    <a href="{{ route('tables.show', ['table' => $table->id]) }}" id="tm{{$table->id-8}}"><span>{{$table->id}}</span></a>
                    @break
                    @case(1)
                    <a href="{{ route('tables.show', ['table' => $table->id]) }}" id="tm{{$table->id-8}}" class="reserved"><span>{{$table->id}}</span></a>
                    @break
                    @case(2)
                    <a href="{{ route('tables.show', ['table' => $table->id]) }}" id="tm{{$table->id-8}}" class="taken"><span>{{$table->id}}</span></a>
                    @break
                @endswitch
            @endif
        @endforeach
    </div>
@endsection
