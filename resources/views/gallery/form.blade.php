@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group row my-2">
    <label for="title_image" class="col-2 col-form-label">Фотографії</label>
    <div class="col-10">
        <input name="files[]" class="form-control @error('files[]') is-invalid @enderror" type="file" multiple/>
        @error('files')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<button id="ok" class="btn btn-success" type="submit">Save</button>
