@extends('layouts.app')

@section('content')
    <div class="container">
        <chats :id="{{$id}}" :user="{{ auth()->user() }}"></chats>
    </div>
@endsection
