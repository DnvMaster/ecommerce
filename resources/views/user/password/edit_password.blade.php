
@extends('user.user_master')
@section('user')
    <div class="row" style="padding: 20px;">
        <div class="col-md-6">
            <h4>Изменить пароль</h4>
            <form action="{{ route('password.update') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Текущий пароль</label>
                    <input id="current_password" type="password" name="old_password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Новый пароль</label>
                    <input id="password" type="password" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Подтвердить пароль</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Обновить</button>
            </form>
        </div>
    </div>
@endsection
