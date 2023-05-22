@extends('user.user_master')
@section('user')
    <div class="row" style="padding: 20px;">
        <div class="col-md-6">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Имя пользователя</label>
                    <input type="text" name="name" class="form-control" value="{{ $editData->name }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Электронная почта</label>
                    <input type="email" name="email" class="form-control" value="{{ $editData->email }}">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Фото профиля</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                    <img src="{{ (!empty($user->profile_photo_path)) ? url('upload/user_images/'.$user->profile_photo_path) : url('upload/no_image.jpg') }}" style="width: 100px; height: 100px;">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
