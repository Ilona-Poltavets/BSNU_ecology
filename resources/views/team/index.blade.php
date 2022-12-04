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
                        {{--                            <form action="{{route('team.destroy',$member->id)}}" method="post">--}}
                        {{--                                @method('delete')--}}
                        {{--                                @csrf--}}
                        <div class="d-grid">
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-name="{{$member->nameUkr}}"
                                    data-bs-id="{{$member->id}}">
                                Видалити
                            </button>
                        </div>
                        {{--                            </form>--}}
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{$teamMembers->links()}}

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <p class="col-form-label">Ви впевнені у видалені <b id="recipient-name"></b>?</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Відмінити</button>
                    <form id="form_delete" action="" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Видалити</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        var exampleModal = document.getElementById('exampleModal')
        exampleModal.addEventListener('show.bs.modal', function (event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var name = button.getAttribute('data-bs-name')
            var id = button.getAttribute('data-bs-id')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var modalTitle = exampleModal.querySelector('.modal-title')
            var modalBodyInput = exampleModal.querySelector('.modal-body b')
            var modalForm=exampleModal.querySelector('#form_delete')

            modalTitle.textContent = 'Видалити ' + name
            modalBodyInput.textContent = name
            modalForm.action=window.location.origin+'/team/'+id
        })
    </script>

@endsection
