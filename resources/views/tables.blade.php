@extends('baseLayout')

@section('title', 'Tables')

@section('content')

    <div id="myImage">
        @foreach ($tables as $table)
            <a href="{{ route('tables.show', ['table' => $table->id]) }}" id="nm1"><span>{{ $table->id }}</span></a>
        @endforeach
        <a href="#" id="nm2"><span>2</span></a>
    </div>

@endsection
