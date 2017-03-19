@extends('layouts.app')

@section('content')

<!--Main column-->
<div class="col-lg-8">

    <!--Post-->
    <div class="post-wrapper">
        <!--Post data-->
        <h1 class="h1-responsive">Вам предстоит операция</h1>       

        <br>

        <!--Featured image -->
        <div class="view overlay hm-white-light z-depth-1-half">
            <img src="{{ asset('img/home.jpg') }}" class="img-fluid " alt="">
            <div class="mask">
            </div>
        </div>

        <br>

        <!--Post excerpt-->
        <p>Даже самое "простое, легкое" оперативное вмешательство - это сложный
            организационный, технический процесс, который зависит от слаженной работы нескольких
            служб и десятка квалифицированных специалистов. В подготовке, проведении и
            послеоперационном лечении и реабилитации принимают участие специалисты хирургической
            службы, в том числе операционного блока, реанимационно-анестезиологической службы,
            клинико-диагностической службы и т.д.
        </p>
        <p>
            Важность анестезиологического пособия в процессе операции нельзя недооценивать. В
            современном мире ни одно оперативное вмешательство, а зачастую и диагностические
            процедуры, такие как гастродуоденоскопия, колоноскопия, трахеобронхоскопия и т.д., не
            проводятся без того или иного вида анестезиологического пособия.
        </p>
        <p>
            От качества и профессионализма проведенной анестезии, а также осведомленности
            врача анестезиолога-реаниматолога о состоянии вашего организма, зависит не только ваше
            самочувствие в послеоперационном периоде, но и риск и частота развития возможных
            осложнений в раннем послеоперационном периоде, что в лучшем случае приводит в
            увеличению сроков пребывания в стационаре.
        </p>
        <p>
            Ни в коем случае не имею целью напугать вас, просто обращаю ваше внимание на
            важность хорошего доверительного и продуктивного контакта с врачом анестезиологом.
        </p>

    </div>
    <!--/.Post-->

    <hr>

    <br>

    <br>

    <!--Form with header-->
    <div class="card">
        <div class="card-block">

            <!--Header-->
            <div class="form-header  purple darken-4">
                <h3>У Вас вопрос?</h3>
            </div>                                              

            <!--Body-->

            <form class="form-horizontal" role="form" method="POST" 
                  action="{{ route('createQuestion') }}">

                {{ csrf_field() }}                           

                <div class="md-form form-group">
                    <textarea type="text" id="question" name="question" 
                              class="md-textarea" required></textarea>
                    <label for="question">Опишите здесь свой вопрос *</label>
                </div>

                @if(Auth::guest()) 

                <div>
                    <h3 class="text-center">Ваши контактные данные</h3>
                    <h5 class="text-center">чтобы я мог оповестить Вас, 
                        когда будет отправлен ответ</h5>
                </div> 

                @else 

                <div>
                    <h5 class="text-center">Отправить от <big><strong>{{ Auth::user()->name }}</strong></big></h5>                               
                </div> 

                @endif

                <div class="text-center form-group">
                    <button type="submit" class="btn btn-deep-purple">Задать вопрос</button>
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

@endsection
