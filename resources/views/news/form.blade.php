<div class="form-group row my-2">
    <label for="title_image" class="col-2 col-form-label">Головна картинка</label>
    <div class="col-10">
        <input name="title_image" class="form-control @error('title_image') is-invalid @enderror" type="file"
               value="{{isset($post)? $post->title_image: old('title_image')}}"/>
        @error('title_image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row my-2">
    <label for="titleUkr" class="col-2 col-form-label">Заголовок українською</label>
    <div class="col-10">
        <input name="titleUkr" class="form-control @error('titleUkr') is-invalid @enderror" type="text"
               value="{{isset($post)? '$post->titleUkr': old('titleUkr')}}" placeholder="Заголовок"/>
        @error('titleUkr')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row my-2">
    <label for="titleEng" class="col-2 col-form-label">Заголовок англійською</label>
    <div class="col-10">
        <input name="titleEng" class="form-control @error('titleEng') is-invalid @enderror" type="text"
               value="{{isset($post)? $post->titleEng: old('titleEng')}}" placeholder="Header"/>
        @error('titleEng')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<label for="contentUkr" class="form-label">Контент українською</label>
<div class="">
    <textarea id="contentUkr" name="contentUkr">
        {{isset($post)? $post->contentUkr: old('contentUkr')}}
    </textarea>
    @error('contentUkr')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<label for="contentEng" class="form-label">Контент англійською</label>
<div class="">
    <textarea id="contentEng" name="contentEng">
        {{isset($post)? $post->contentEng: old('contentEng')}}
    </textarea>
    @error('contentEng')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<button id="ok" class="btn btn-success" type="submit">Save</button>
