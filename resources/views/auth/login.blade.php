@extends('layouts.app')

@section('loginForm')

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <!--Form with header-->
        <div class="card col-6">
            <div class="card-block">

                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <!--Header-->
                    <div class="form-header  purple darken-4">
                        <h3><i class="fa fa-lock"></i> Вход:</h3>
                    </div>

                    <!--Body-->
                    <div class="md-form form-group">                       
                        <input id="email1" type="email" class="form-control validate" name="email" required autofocus>
                        <label for="email1">E-Mail</label> 
                        @if ($errors->has('email'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="md-form form-group">                       
                        <input id="password" type="password" class="form-control validate" name="password" required>
                        <label for="password">Пароль</label> 
                        @if ($errors->has('password'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>


                    <div class="md-form form-group">

                        <label>  
                            <input type="checkbox" name="remember" 
                                   {{ old('remember') ? 'checked' : '' }}>
                                   Запомнить меня</label>

                    </div>


                    <div class="text-center">                       
                        <button type="submit" class="btn btn-deep-purple">Войти</button>
                    </div>
                </form>
            </div>

            <!--Footer-->
            <div class="modal-footer">

                <div class="options mdb-color-text">
                    <p class="align-items-end">Не зарегистрированы? <a href="{{ route('register') }}">Регистрация</a></p>
                    <p class="align-items-end">Забыли <a href="{{ route('password.request') }}">Пароль?</a></p>
                </div>
            </div>

        </div>
        <!--/Form with header-->
    </div>
</div>
@endsection

@section('sidebar')

@endsection
