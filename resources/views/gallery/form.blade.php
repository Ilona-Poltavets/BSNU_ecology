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
    <label for="title_image" class="col-2 col-form-label">Фотографія</label>
    <div class="col-10">
        <input name="file" class="form-control @error('file') is-invalid @enderror" type="file"/>
        @error('files')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row my-2">
    <label for="descriptions" class="col-2 col-form-label">Опис</label>
    <div class="col-10">
        <input name="descriptions" class="form-control @error('descriptions') is-invalid @enderror" type="text"
               value="{{isset($image)?$image->descriptions:''}}" placeholder="Опис">
        @error('descriptions')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<button id="ok" class="btn btn-success" type="submit">Save</button>
