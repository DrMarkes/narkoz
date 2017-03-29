@extends('layouts.app')

@section('content')

<div class="col-lg-8">

    @forelse($questions as $question)

    <div class="post-wrapper">
        <p>{{ $question->user->name }}</p>
        <br>
        <p>{{ $question->content }}</p>
        <br>
        <p>{{ $question->status }}</p>
    </div>
    <hr>

    @empty
    
    <div class="post-wrapper">
        <p>Вопросов не найдено</p>
    </div>
    <hr>
    
    @endforelse
    
</div>

@endsection
