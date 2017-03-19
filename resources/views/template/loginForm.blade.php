<div id="login" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="card">
            <div class="card-block">

                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <!--Header-->
                    <div class="form-header  purple darken-4">
                        <h3><i class="fa fa-lock"></i> Вход:</h3>
                    </div>

                    <!--Body-->
                    <div class="md-form form-group">                       
                        <input id="email" type="email" class="form-control" name="email" required autofocus>
                        <label for="email">E-Mail</label> 
                        @if ($errors->has('email'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="md-form form-group">                       
                        <input id="password" type="password" class="form-control" name="password" required>
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
                    <p class="align-items-end">Не зарегистрированы? <a href="#">Регистрация</a></p>
                    <p class="align-items-end">Забыли <a href="#">Пароль?</a></p>
                </div>
            </div>

        </div>
        <!--/Form with header-->
    </div>
</div>

