@extends('layouts.admin')
@section('title','Images')
@section('content')
    <a href="{{route('photos.create')}}" class="btn btn-success">Додати зображення</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>img</th>
            <th>Created at</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($images as $image)
            <tr>
                <td>{{$image->id}}</td>
                <td>
                    <a data-fancybox href="{{$image->path}}">
                        <img class="image-gallery single-images" src="{{$image->path}}" alt="">
                    </a>
                </td>
                <td>{{$image->created_at}}</td>
                <td>
                    <div class="d-grid">
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                                data-bs-id="{{$image->id}}">
                            Видалити
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$images->links()}}

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <p class="col-form-label">Ви впевнені у видалені?<b id="recipient-name"></b></p>
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
            var modalForm = exampleModal.querySelector('#form_delete')

            modalTitle.textContent = 'Видалити ' + name
            modalBodyInput.textContent = name
            modalForm.action = window.location.origin + '/photos/' + id
        })
    </script>
@endsection
