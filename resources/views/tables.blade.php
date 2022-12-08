@extends('baseLayout')

@section('content')
	<p class="wide-hidden">Oh wow look at you <br> with your 22/9 or above <br> aspect ratio</p>
    <div id="myImage">
        @foreach ($tables as $table)
            @if ($table->id < 9)
                <a href="{{ route('tables.show', ['table' => $table->id]) }}" id="nm{{$table->id}}"><span>{{$table->id}}</span></a>
            @else
                <a href="{{ route('tables.show', ['table' => $table->id]) }}" id="tm{{$table->id-8}}"><span>1</span></a>
            @endif
        @endforeach
    </div>
@endsection
