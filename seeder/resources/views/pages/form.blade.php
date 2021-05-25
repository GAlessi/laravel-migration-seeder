@extends('layouts.main-layout')
@section('content')
    <main>
        <form method="POST" action="{{ route('store') }}">

            @csrf
            @method('POST')

            <div>
                <label for="title">Title</label>
                <div>
                    <input id="title" type="text" name="title">
                </div>
            </div>
            <div>
                <label for="original_title">Original title</label>
                <div>
                    <input id="title" type="text" name="original_title">
                </div>
            </div>
            <div>
                <label for="original_title">Nationality</label>
                <div>
                    <input id="title" type="text" name="nationality">
                </div>
            </div>
            <div>
                <label for="original_title">Date</label>
                <div>
                    <input id="title" type="date" name="date">
                </div>
            </div>
            <div>
                <label for="vote"> Vote (0 to 10)</label>
                <div>
                    <input id="title" type="number" name="vote">
                </div>
            </div>

            <button type="submit" name="button">Send</button>
        </form>

    </main>
@endsection
