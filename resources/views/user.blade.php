@extends('layouts.app')

@section('content')

<!--Main column-->
<div class="col-lg-8">

    <!--Post-->
    <div class="post-wrapper">

        <!--Post data-->        
        <div class="md-form col-lg-8">

            <h1 class="h1-responsive">Личные данные</h1> 

            <br>
            <br>

            <form class="form-horizontal" role="form" method="POST" 
                  action="{{ route('user.update') }}">
                {{ csrf_field() }}
                <div class="md-form form-group">
                    <input value="{{ $user->name }}" type="text" id="name" name="name" 
                           class="form-control validate" required autofocus>
                    <label class="active" for="name">Имя</label>
                </div>

                <div class="md-form form-group">
                    <input value="{{ $user->email }}" type="email" id="email" 
                           name="email" class="form-control validate">
                    <label class="active" for="email">Почта</label>
                </div>

                <div class="md-form form-group">                       
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </form>

        </div>
    </div>

    @if (session('status'))
    <div class="alert alert-success" role="alert">Данные успешно сохранены</div>
    @endif

</div>

@endsection

