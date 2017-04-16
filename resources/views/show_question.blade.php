@extends('layouts.app')

@section('content')

<div class="col-lg-8">

    <div class="post-wrapper">       

        <p class="mb-1">{{ $question->content }}</p>

        <div>
            @forelse($comments as $comment)
                <p class="mb-1">{{ $comment->content }}</p>

            @empty
                <p class="mb-1">Ответ скоро будет</p>

            @endforelse
        </div>

        <form class="form-horizontal" role="form" method="POST" 
        action="{{ route('comments.store', $question->id) }}">

        {{ csrf_field() }}                           

        <div class="md-form form-group">
            <textarea type="text" id="comment" name="comment" 
            class="md-textarea" required></textarea>
            <label for="comment">Комментировать</label>
        </div>
        <div class="text-center form-group">
            <button type="submit" class="btn btn-primary">
                 Уточнить вопрос
            </button>
        </div>

    </form>

</div>
</div>

@endsection
