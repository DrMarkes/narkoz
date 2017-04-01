<!--Sidebar-->
<div class="col-lg-4">

    @if(Auth::check())
    <div class="widget-wrapper">
        <div class="list-group">
            <p class="list-group-item bg-primary text-white">Личный кабинет</p>
            <a href="{{ route('questions.index') }}" class="list-group-item 
               list-group-item-action {{ Route::is('questions.index') ? 'text-primary' : '' }}">
                Мои вопросы
            </a>
                
            <a href="{{ route('questions.hasAnswer') }}" 
               class="list-group-item list-group-item-action
               {{ Route::is('questions.hasAnswer') ? 'text-primary' : '' }}">
                Отвеченные</a>
                
            <a href="{{ route('questions.noAnswer') }}" 
               class="list-group-item list-group-item-action
               {{ Route::is('questions.noAnswer') ? 'text-primary' : '' }}">
                Ожидают ответа</a>
            <a href="#" class="list-group-item list-group-item-action">Изменить личные данные</a>
        </div>
        <br>
        <div class="text-center form-group">
            <button type="submit" class="btn btn-primary">Задать вопрос</button>
        </div>
    </div>
    @endif



    <div class="widget-wrapper">
        <h4>Subscription form:</h4>
        <br>
        <div class="card">
            <div class="card-block">
                <p><strong>Subscribe to our newsletter</strong></p>
                <p>Once a week we will send you a summary of the most useful news</p>
                <div class="md-form">
                    <i class="fa fa-user prefix"></i>
                    <input type="text" id="form1" class="form-control">
                    <label for="form1">Your name</label>
                </div>
                <div class="md-form">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="form2" class="form-control">
                    <label for="form2">Your email</label>
                </div>
                <button class="btn btn-info">Submit</button>

            </div>
        </div>
    </div>

</div>
<!--/.Sidebar-->