
<!--Navbar-->
<nav class="navbar navbar-toggleable-md navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}" >
            <strong>{{ config('app.name', 'Laravel') }}</strong>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav1">
            <ul class="navbar-nav mr-auto">                           
                <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class="nav-link">Главная</a>
                </li>

                <li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
                    <a href="{{ route('about') }}" class="nav-link">Обо мне</a>
                </li>
                
                @if(Auth::check())
                <li class="nav-item dropdown btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" 
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Личный кабинет</a>
                    <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                        <a href="{{ route('questions.index') }}" 
                           class="dropdown-item 
                           {{ Route::is('questions.index') ? 'text-primary' : '' }}">
                            Мои вопросы</a>

                        <a href="{{ route('questions.hasAnswer') }}" 
                           class="dropdown-item 
                           {{ Route::is('questions.hasAnswer') ? 'text-primary' : '' }}">
                            Отвеченные</a>

                        <a href="{{ route('questions.noAnswer') }}" 
                           class="dropdown-item
                           {{ Route::is('questions.noAnswer') ? 'text-primary' : '' }}">
                            Ожидают ответа</a>

                        <a href="{{ route('user') }}" class="dropdown-item
                           {{ Route::is('user') ? 'text-primary' : '' }}">
                            Изменить личные данные</a>
                    </div>
                </li>
                @endif

            </ul>

            <form class="form-inline waves-effect waves-light">
                <input class="form-control" type="text" placeholder="Search">
            </form>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav align-items-end">
                <!-- Authentication Links -->
                @if (Auth::guest())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Войти</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
                </li>
                @else
                <li class="nav-item dropdown btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                            Выйти
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!--/.Navbar-->