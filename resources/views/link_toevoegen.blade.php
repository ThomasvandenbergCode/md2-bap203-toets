@extends('layouts.master')

@section('content')

    <form action="{{ route('linkopslaan') }}" method="POST">
        @csrf

        <input type="text" name="title" placeholder="title"> <br>

            @if($errors->has('title'))
                <p class="text-danger">{{  $error->first('title') }}</p>
            @endif
        <input type="text" name="description" placeholder="description"><br>
                @if($errors->has('description'))
                    <p class="text-danger">{{  $error->first('description') }}</p>
                @endif
        <input type="text" name="url" placeholder="url">
        @if($errors->has('url'))
            <p class="text-danger">{{  $error->first('url') }}</p>
        @endif
        <br>
        <button type="submit">POGGERS</button>
    </form>


@endsection