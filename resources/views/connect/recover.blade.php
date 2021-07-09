@extends('connect.master') <!-- Extendemos o utilizamos la estructura escrita dentro del archivo "master.blade.php" -->

@section('title', 'Recuperar contraseña')
@section('content')
<div class="contenedor">
              @if(Session::has('message'))
                    <div class="container">
                      <div class="alert alert-{{ Session::get('typealert') }}" style="display:none;">
                          {{ Session::get('message') }}
                          @if ($errors->any())
                          <ul>
                            @foreach($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                          @endif
                          <script>
                            $('.alert').slideDown();
                            setTimeout(function(){ $('.alert').slideUp(); }, 10000);
                          </script>
                      </div>
                    </div>
                    @endif
    <div class="box box_login">
        <header class="header">
            <h1>Recuperar contraseña</h1>
            <a href="{{ url('/') }}">
                <!-- <img  src="{{ url('/static/images/logo.jpg') }}" alt="Logotipo"> -->
                <h2 class="logo">S</h2>
            </a>
        </header>
        <div class="inside">
            {!! Form::open (['url' => '/recover']) !!}
            <label for="email">Correo electrónico:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-at"></i></div>
                    </div>
                    {!! Form::email('email', null, ['class' => 'form-control'], 'required') !!}
                </div>

                {!! Form::submit('Recuperar contraseña', ['class' => 'btn btn-success mtop16' ]) !!}
            {!! Form::close() !!}

            <div class="footer mtop16">
                <a href="{{ url('/register') }}">¿Aún no tienes una cuenta?, crea una</a>
                <a href="{{ url('/login') }}">Ingresar a mi cuenta</a>
                {{-- LINKS DE LAS PLANTILLAS A ENSEÑAR AL PROFESOR --}}
                <a href="{{ url('/password_plantilla') }}">Plantilla del correo</a>
            </div>
        </div>
    </div>
</div>
@stop
