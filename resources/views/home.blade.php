@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{route('factory')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="count"> <h4>Введите количество записей для посева в базу данных</h4> </label>
                    <input  name="quantity" type="text" class="form-control" id="count">
                </div>
                <button type="submit" class="btn btn-primary">Сгенерировать</button>
                <button onclick="location.href='{{route('refresh')}}'" type="button" class="btn btn-success ml-5">Удалить все записи</button>
            </form>
        </div>
    </div>
        <div class="row justify-content-center ">
            <div class="col-md-12 mt-5">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Email</th>
                        <th scope="col">Телефон</th>
                    </tr>
                    </thead>
                    @foreach($feedbacks as $feedback)
                        <tbody>
                        <tr>
                            <th scope="row">{{$feedback->id}}</th>
                            <td>{{$feedback->clientName}}</td>
                            <td>{{$feedback->clientEmail}}</td>
                            <td>{{$feedback->clientPhoneNumber}}</td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
                {{$feedbacks->links()}}
            </div>
        </div>

</div>
@endsection
