@extends('user.user_master')
@section('user')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="row" style="padding: 20px;">
        <div class="col-md-6">
            <form>
			@csrf
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
                    <input class="form-control" type="file" id="Image">
                </div>
                <div class="mb-3">
                    <img id="showImage" src="{{ (!empty($user->profile_photo_path)) ? url('upload/user_images/'.$user->profile_photo_path) : url('upload/no_image.jpg') }}" style="width: 100px; height: 100px;">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">Обновить</button>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#Image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
