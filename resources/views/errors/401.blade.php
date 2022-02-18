@extends('layouts.non-auth')

@section('content')

<div class="account-pages my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-8">
                <div class="text-center">

                    <div>
                        <img src="/assets/images/not-found.png" alt="" class="img-fluid" />
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <h3 class="mt-3">Usted no tiene Permiso para ingresar en este módulo</h3>
                <p class="text-muted mb-5"></p>

                <a href="http://localhost/proyectos/public/dashboard/home" class="btn btn-lg btn-primary mt-4">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection