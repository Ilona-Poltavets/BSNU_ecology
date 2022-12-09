@extends('layouts.admin')
@section('title','Ресурси')
@section('content')
    <a class="btn btn-success" href="{{route("resource.create")}}">Додати ресурс</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>file</th>
            <th>extension</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($resources as $resource)
            <tr>
                <td>{{$resource->id}}</td>
                <td>{{$resource->name}}</td>
                <td>{{$resource->path}}</td>
                <td>{{$resource->type}}</td>
                <td>
                    <div class="d-grid">
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                                data-bs-id="{{$resource->id}}">
                            Видалити
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div>
        {{$resources->links()}}
    </div>

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
            modalForm.action = window.location.origin + '/resource/' + id
        })
    </script>
@endsection
