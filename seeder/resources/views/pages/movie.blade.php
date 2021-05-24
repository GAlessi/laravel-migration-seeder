@extends('layouts.main-layout')
@section('content')
    <main>
        <ul>

            <li><h1>{{$movie -> title}}</h1></li>
            <li><h3>Original title: {{$movie -> original_title}}</h3></li>
            <li><h3>Nationality: {{$movie -> nationality}}</h3></li>
            <li><h3>Release Date: {{$movie -> date}}</h3></li>
            <li><h3>Vote {{$movie -> vote}}</h3></li>

        </ul>
        <a class="button" href="{{route('home')}}">Back</a>
    </main>
@endsection
