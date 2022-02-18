@extends('layouts.non-auth')

@section('content')

<div class="account-pages my-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row justify-content-center">
                            <div class="col-md-6 p-3">
                                <div class="mx-auto mb-2">
                                    <a href="javascript:void(0);">
                                        <h3 class="d-inline align-middle ml-1 text-logo text-center">Autentificación de usuarios</h3>
                                    </a>
                                </div>
                                <img src="../../public/assets/images/logo.png" alt="Logo Utags" width="400" class="mx-auto d-block">
                                <h6 class="h5 mb-0 mt-4">Bienvenido!</h6>
                                <p class="text-muted mt-1 mb-4">Inicie sesión para acceder a su cuenta.</p>

                                @if(session('error'))<div class="alert alert-danger">{{ session('error') }}</div>
                                <br>@endif
                                @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>
                                <br>@endif

                                <form action="{{ route('login') }}" method="post" class="authentication-form">
                                    @csrf

                                    <div class="form-group">
                                        <label class="form-control-label">Usuario</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="mail"></i>
                                                </span>
                                            </div>
                                            <input type="email"
                                                class="form-control @if($errors->has('email')) is-invalid @endif" id="
                                                email" placeholder="usuario@correo.com" name="email" value="{{ old('email')}}" maxlength="100" autocomplete="off"/>

                                            @if($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group mt-4">
                                        <label class="form-control-label">Contraseña</label>
                                        <a href="{{ route('password.request') }}"
                                            class="float-right text-muted text-unline-dashed ml-1">Olvidé mi contraseña?</a>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="lock"></i>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control @if($errors->has('password')) is-invalid @endif" id="password"
                                                placeholder="Ingresar contraseña"  name="password" />

                                            @if($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin"
                                                {{ old('remember') ? 'checked' : '' }} />
                                            <label class="custom-control-label" for="checkbox-signin">Recordarme</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Ingresar
                                        </button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection