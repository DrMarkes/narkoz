@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <!--Form with header-->
        <div class="card col-6">
            <div class="card-block">
                
                <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}

                    <!--Header-->
                    <div class="form-header  purple darken-4">
                        <h3>Сменить пароль</h3>
                    </div>

                    <!--Body-->
                    @if (session('status'))
                    <p class="text-success">
                        {{ session('status') }}
                    </p>
                    @endif

                    <div class="md-form form-group">                       
                        <input id="email" type="email" class="form-control validate" 
                               value="{{ old('email') }}" name="email" required autofocus>
                        <label for="email">E-Mail</label> 
                        @if ($errors->has('email'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>                  

                    <div class="text-center">                       
                        <button type="submit" class="btn btn-deep-purple">
                            Отправить ссылку для смены пароля
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('sidebar')

@endsection