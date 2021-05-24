@extends('layouts.main-layout')
@section('content')
    <main class="home">
        <div class="ospiti">
            <h1>Films:</h1>

            <ul>
                @foreach ($movies as $movie)
                    <li> <a href="{{ route('movie', $movie -> id) }}">

                        {{ $movie -> title}}
                        [{{ $movie -> id }}]
                    </li>
                @endforeach
            </ul>

        </div>
    </main>
@endsection
