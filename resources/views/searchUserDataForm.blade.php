@extends('layouts.userShowData')

@section('content')
    <br>
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
{{--                {{dd($users)}}--}}
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                            data-bs-display="static" aria-expanded="false">
                        Доступы для <b>{{$user->fullNameUser}}</b>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                        <div class="container-md">
                            <div class="container text-left">
                                1. Доступы к площадке для практических вебинаров-тренингов (чтобы повторять за
                                преподавателем и
                                экспериментировать):<br>
                                - БД: имя базы - {{$user->databasePlatformNamePw}},<br>
                                имя пользователя - {{$user->databasePlatformUserPw}} и пароль
                                - {{$user->databasePlatformPassPw}} <br>
                                - доменное имя сайта: {{$user->platformPw}}<br>
                                2. Доступы к площадке для самостоятельных работ (чтобы выполнять командный проект):<br>
                                - БД: имя базы - {{$user->databasePlatformNameIw}},
                                имя пользователя - {{$user->databasePlatformUserIw}} и пароль
                                - {{$user->databasePlatformPassIw}}<br>
                                - доменное имя сайта: {{$user->platformIw}}<br>
                                <hr>
                                Доступ к ISP Manager: <br>
                                isp.sprint.1t.ru:1500 <br>
                                Login: {{$user->loginUser}} <br>
                                Pass: {{$user->passUser}} <br>

                            </div>
                        </div>
                    </ul>
                </div>
                <br>
                <br>
            @endforeach
        @endif
        <br>


@stop
