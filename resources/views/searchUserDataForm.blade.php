@extends('layouts.userShowData')

@section('content')
    {{--    <script>--}}
    {{--        sendMessage();--}}
    {{--    </script>--}}
    <br>
    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <br>
    @if(isset(Auth::user()->email))
        <div class="alert alert-success success-block">
            <strong>Welcome</strong>
            <br/>
            <a href="{{ url('/logout') }}">Logout</a>
        </div>
    @else
        <script>window.location = "/login";</script>
    @endif
    @if ($success = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $success }}</strong>
        </div>
    @endif
    @if ($info = Session::get('emptyStudent'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $info }}</strong>
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container-md">
        <div class="container text-center">
            <form method="POST" action="{{ route('showUserData') }}">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Фамилия студента</span>
                        </div>

                        <input type="text" class="form-control" aria-describedby="basic-addon2" name="search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Поиск</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>

        @if(isset($users))
            @foreach($users as $key=>$user)
                <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                            data-bs-display="static" data-bs-auto-close="outside" aria-expanded="false">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Доступы для
                        <b>{{$user->fullNameUser}}</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp;
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                        <div class="container-md">
                            <div class="container text-left">
                                1. Доступы к площадке для практических вебинаров-тренингов (чтобы повторять за
                                преподавателем и экспериментировать): <br>
                                - БД: имя базы - {{$user->databasePlatformNamePw}}, имя пользователя -
                                {{$user->databasePlatformUserPw}} и пароль - {{$user->databasePlatformPassPw}}
                                - доменное имя сайта: {{$user->platformPw}} <br>
                                2. Доступы к площадке для самостоятельных работ (чтобы выполнять командный проект): <br>
                                - БД: имя базы - {{$user->databasePlatformNameIw}}, имя пользователя -
                                {{$user->databasePlatformUserIw}} и пароль - {{$user->databasePlatformPassIw}}
                                - доменное имя сайта: {{$user->platformIw}}

                                <hr>
                                Доступ к ISP Manager: <br>
                                isp.sprint.1t.ru:1500 <br>
                                Login: {{$user->loginUser}} <br>
                                Pass: {{$user->passUser}} <br>

                            </div>
                        </div>
                    </ul>
                </div> &ensp;

                <form class="form-check-inline" method="POST" action="{{ route('updateStudentStatus', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="checkbox_playground"
                               id="checkbox_playground"
                               value="1">
                        <label class="form-check-label" for="inlineCheckbox1" onchange="fun1()">Доступ к
                            площадке</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="checkbox_manager" id="checkbox_manager"
                               value="1">
                        <label class="form-check-label" for="inlineCheckbox2">Доступ к ISP Manager</label>
                    </div>
                    <div class="input-group-append form-check-inline">
                        <button type="submit" class="btn btn-primary">Подтвердить</button>
                    </div>
                </form>

                <br>
                <br>
            @endforeach
        @endif
        <br>


@stop
