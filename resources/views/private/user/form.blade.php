{!!Form::token()!!}
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
      @Include('messages.errors')
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 form-control text-center">
        {!!Form::label('avatar', 'Imagen de perfil')!!}
        @IF(!empty($user))
        {{ Form::image(asset('storage/'.$user->image.''), 'a picture', ['class' => 'img-fluid','alt' => 'Responsive-image' , 'name' => 'avatarImage', 'id' => 'avatarImage']) }}
        @ElseIF(empty($user))
        {{ Form::image(asset('storage/default.png'), 'a picture', ['class' => 'img-fluid','alt' => 'Responsive-image' , 'name' => 'avatarImage' , 'id' => 'avatarImage']) }}
        @EndIF
        {!!Form::file('image',  ['id' => 'avatar', 'class' => 'form-control','hidden' => true, 'accept' => 'image/x-png,image/gif,image/jpeg,image/PNG'])!!}
        <div class="btn-group actions-avatar">
            <label id="lblAvatar" onclick="callInputFileAvatar()" class="btn">
                <i class="fa fa-file-image-o"></i>
            </label>
            <button type="button" class="btn" id="clearFiles" onclick='removeAvatar()'>
                <i class="fa fa-trash"></i>
            </button>
        </div>
    </div>
    <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 form-group">
                    {!!Form::label('nombre', 'Nombre:')!!}
                    {!!Form::text('name',  old('name'), ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre' , 'required' => true])!!}
                </div>
                <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 form-group">
                    {!!Form::label('surnames', 'Apellidos:')!!}
                    {!!Form::text('surnames',  old('surnames'), ['class' => 'form-control', 'placeholder' => 'Ingrese los apellidos' , 'required' => true])!!}
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 form-group">
                    {!!Form::label('code', 'Codigo:')!!}
                    {!!Form::text('code',  old('code'), ['class' => 'form-control', 'placeholder' => 'Ingrese el codigo' , 'required' => true])!!}
                </div>
                <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 form-group">
                    {!!Form::label('email', 'Email:')!!}
                    {!!Form::text('email',  old('email'), ['class' => 'form-control', 'placeholder' => 'Ingrese el email' , 'required' => true])!!}
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 form-group">
                    {!!Form::label('role', 'Rol:')!!}
                    {!!Form::select('role', $role, isset($user->role_id)? $user->role_id : '' ,['class' => 'form-control','required' => true])!!}
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 form-group">
                    {!!Form::label('password', 'Contraseña:')!!}
                    {!!Form::password('password', ['id' => 'password' ,  'class' => 'form-control', 'placeholder' => 'Ingrese su contraseña'])!!}
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 form-group">
                    {!!Form::label('passwordAgain', 'Confirme la contraseña:')!!}
                    {!!Form::password('passwordAgain', ['id' => 'passwordAgain', 'class' => 'form-control','placeholder' => 'Ingrese nuevamente la contraseña'])!!}
                </div>
            </div>
        </div>
    </div>
</div>
