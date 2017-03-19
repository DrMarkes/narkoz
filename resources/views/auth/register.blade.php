@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <!--Form with header-->
        <div class="card col-6">
            <div class="card-block">

                <!--Header-->
                <div class="form-header  purple darken-4">
                    <h3><i class="fa fa-lock"></i> Регистрация:</h3>
                </div>

                <!--Body-->
                <form class="form-horizontal" role="form" method="POST" 
                      action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-group md-form">    
                        <input id="name" type="text" class="form-control validate" 
                               name="name" value="{{ old('name') }}" required autofocus>
                        <label for="name">Name</label>
                        @if ($errors->has('name'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif          
                    </div>

                    <div class="md-form form-group">                       
                        <input id="email" type="email" class="form-control validate" 
                               name="email" required>
                        <label for="email">E-Mail</label> 
                        @if ($errors->has('email'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="md-form form-group">                       
                        <input id="password" type="password" class="form-control validate" 
                               name="password" required>
                        <label for="password">Пароль</label> 
                        @if ($errors->has('password'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="md-form form-group">
                        <input id="password-confirm" type="password" class="form-control validate" 
                               name="password_confirmation" required>
                        <label for="password-confirm">Confirm Password</label>
                    </div>

                    <div class="text-center">                       
                        <button type="submit" class="btn btn-deep-purple">Войти</button>
                    </div>
                </form>
            </div>
        </div>
        <!--/Form with header-->
    </div>
</div>
@endsection

@section('sidebar')

@endsection