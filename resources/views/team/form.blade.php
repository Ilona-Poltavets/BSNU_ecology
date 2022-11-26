<div class="form-group row my-2">
    <label for="nameEng" class="col-2 col-form-label">Ім'я українською</label>
    <div class="col-10">
        <input name="nameUkr" class="form-control @error('nameUkr') is-invalid @enderror" type="text"
               value="{{isset($member)? $member->nameUkr: old('nameUkr')}}" placeholder="ФІО"/>
        @error('nameUkr')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row my-2">
    <label for="nameEng" class="col-2 col-form-label">Ім'я англійськю</label>
    <div class="col-10">
        <input name="nameEng" class="form-control @error('nameEng') is-invalid @enderror" type="text"
               value="{{isset($member)? $member->nameEng: old('nameEng')}}" placeholder="ФІО (англійською)"/>
        @error('nameEng')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row my-2">
    <label for="rankUkr" class="col-2 col-form-label">Посада українською</label>
    <div class="col-10">
        <input name="rankUkr" class="form-control @error('rankUkr') is-invalid @enderror" type="text"
               value="{{isset($member)? $member->rankUkr: old('rankUkr')}}" placeholder="Посада"/>
        @error('rankUkr')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row my-2">
    <label for="rankEng" class="col-2 col-form-label">Посада англійськю</label>
    <div class="col-10">
        <input name="rankEng" class="form-control @error('rankEng') is-invalid @enderror" type="text"
               value="{{isset($member)? $member->rankEng: old('rankEng')}}" placeholder="Посада (англійською)"/>
        @error('rankEng')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row my-2">
    <label for="aboutUkr" class="col-2 col-form-label">Про учасника українською</label>
    <div class="col-10">
        <input name="aboutUkr" class="form-control @error('aboutUkr') is-invalid @enderror" type="text"
               value="{{isset($member)? $member->aboutUkr: old('aboutUkr')}}" placeholder="Про учасника"/>
        @error('aboutUkr')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row my-2">
    <label for="aboutEng" class="col-2 col-form-label">Про учасника англійськю</label>
    <div class="col-10">
        <input name="aboutEng" class="form-control @error('aboutEng') is-invalid @enderror" type="text"
               value="{{isset($member)? $member->aboutEng: old('aboutEng')}}" placeholder="Про учасника (англійською)"/>
        @error('aboutEng')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row my-2">
    <label for="image" class="col-2 col-form-label">Фото</label>
    <div class="col-10">
        <input name="image" class="form-control @error('image') is-invalid @enderror" type="file"
               value="{{isset($member)? $member->image: old('image')}}" placeholder="image"/>
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="row my-2">
    <div class="offset-10 col-1">
        <a class="btn btn-danger float-right" href="{{ URL::previous() }}">Cancel</a>
    </div>

    <div class="col-1">
        <button type="submit" class="btn btn-primary float-right">Submit</button>
    </div>
</div>
