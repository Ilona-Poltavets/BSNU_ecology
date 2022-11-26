@extends('layouts.admin')
@section('title','Team')
@section('content')
    <a class="btn btn-success" href="{{route('team.create')}}">Додати</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Фото</th>
            <th>Ім'я українською</th>
            <th>Ім'я англійськю</th>
            <th>Посада українською</th>
            <th>Посада англійськю</th>
            <th>Про учасника українською</th>
            <th>Про учасника англійськю</th>
            <th style="width: 110px;"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($teamMembers as $member)
            <tr>
                <td>{{$member->id}}</td>
                <td><img style="width: 200px" src="{{asset($member->image)}}" alt=""></td>
                <td>{{$member->nameUkr}}</td>
                <td>{{$member->nameEng}}</td>
                <td>{{$member->rankUkr}}</td>
                <td>{{$member->rankEng}}</td>
                <td>{{$member->aboutUkr}}</td>
                <td>{{$member->aboutEng}}</td>
                <td>
                    <div class="d-grid">
                            <a href="{{route('team.edit', $member->id)}}"
                               class="btn btn-outline-primary">Редагувати</a>
                            <form action="{{route('team.destroy',$member->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-outline-danger">Видалити</button>
                                </div>
                            </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
