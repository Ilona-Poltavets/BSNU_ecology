@extends('layouts.admin')
@section('title','News')
@section('content')
    <a class="btn btn-success" href="{{route('news.create')}}">Додати новину</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Фото</th>
            <th>Заголовок українською</th>
            <th>Заголовок англійською</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td><img src="{{asset($post->title_image)}}" class="title-image" alt=""></td>
                <td>{{$post->titleUkr}}</td>
                <td>{{$post->titleEng}}</td>
                <td>
                    <div class="d-grid">
                        <a href="{{route('news.edit', $post->id)}}"
                           class="btn btn-outline-primary">Редагувати</a>
                        <div class="d-grid">
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-name="{{$post->titleUkr}}"
                                    data-bs-id="{{$post->id}}">
                                Видалити
                            </button>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{$news->links()}}

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
            var button = event.relatedTarget
            var name = button.getAttribute('data-bs-name')
            var id = button.getAttribute('data-bs-id')

            var modalTitle = exampleModal.querySelector('.modal-title')
            var modalBodyInput = exampleModal.querySelector('.modal-body b')
            var modalForm=exampleModal.querySelector('#form_delete')

            modalTitle.textContent = 'Видалити ' + name
            modalBodyInput.textContent = name
            modalForm.action=window.location.origin+'/news/'+id
        })
    </script>
@endsection
