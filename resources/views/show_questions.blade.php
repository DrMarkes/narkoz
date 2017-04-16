@extends('layouts.app')

@section('content')

<div class="col-lg-8">

    <div class="list-group">
        @forelse($questions as $question)       

        <a href="{{ route('questions.show', ['id' => $question->id]) }}" 
           class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{ $question->user->name }}</h5>
                <small>{{ $question->updated_at}}</small>
            </div>

            <p class="mb-1">{{ $question->content }}</p>
            <small class="w-100 text-right">{{ $question->status }}</small>
        </a>

        @empty

        <p class="list-group-item align-items-start">Вопросов не найдено</p>

        @endforelse
    </div>
</div>

@endsection
