@extends('layouts.app')


@section('content')
    @if(count($students)>0)
        @foreach ($students as $student)
        <ul>
            <li><h1>{{$student->user->name}}</h1></li>
        </ul>
        @endforeach
    @endif
@endsection
