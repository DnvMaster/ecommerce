@extends('user.user_master')

@section('user')
    <div class="card" style="width: 18rem;">
        <img src="{{ (!empty($user->profile_photo_path)) ? url('upload/user_images/'.$user->profile_photo_path) : url('upload/no_image.jpg') }}" class="card-img-top" >
        <div class="card-body">
            <h5 class="card-title">Имя пользователя : {{ $user->name }}</h5>
            <p class="card-text">Эл. почта пользователя : {{ $user->email }}</p>
            <a href="{{ route('profile.edit') }}" class="btn btn-primary">Редактировать профиль</a>
        </div>
    </div>
@endsection
