@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                @guest
                    <button onclick="location.href='{{route('login')}}'" type="button"
                            class="btn btn-success btn-lg mb-5">Войти</button>
                    <button onclick="location.href='{{route('register')}}'" type="button"
                            class="btn btn-success btn-lg float-right">Регистрация</button>
                @else
                    <button onclick="location.href='{{route('home')}}'" type="button"
                            class="btn btn-success btn-lg float-right">В кабинет</button>
                @endguest
                <h2 class="text-center">Оставьте ваш отзыв</h2>
                <form class="mt-5" action="{{route('store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="clientName" class="form-label"><strong>Ваше имя</strong></label>
                        <input name="clientName" placeholder="укажите имя" type="text" class="form-control"  >
                    </div>
                    <div class="mb-3">
                        <label for="clientEmail" class="form-label"> <strong>Ваш Email</strong> </label>
                        <input name="clientEmail" placeholder="укажите ваш Email" type="text" class="form-control"  >
                    </div>
                    <div class="mb-3">
                        <label for="clientPhoneNumber" class="form-label"> <strong>Ваш телефон</strong> </label>
                        <input name="clientPhoneNumber" placeholder="укажите ваш номер телефона" type="text" class="form-control" >
                    </div>
                    <button type="submit" class="btn btn-primary ">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
