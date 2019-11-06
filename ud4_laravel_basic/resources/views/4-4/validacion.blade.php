<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            /*Para quitar al number las flechas de subir y bajar numero*/
            input[type=number]::-webkit-outer-spin-button,

            input[type=number]::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            input[type=number] {
                -moz-appearance:textfield;
            }
            /*Fin modificacion number*/

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Formulario para validar
                </div>
                <form action="{{route('val')}}" method="GET">
                    @csrf
                    <label>Nombre:</label>
                    <input type="text" name="nombre" placeholder="Ej: Aitor" value="{{old('nombre')}}">
                    <br>
                    <label>Apellido:</label>
                    <input type="text" name="apellido" placeholder="Ej: Fernandez" value="{{old('apellido')}}">
                    <br>
                    <label>Email:</label>
                    <input type="text" name="email" placeholder="Ej: afernandez@gmail.com" value="{{old('email')}}">
                    <br>
                    <label>Telefono:</label>
                    <input type="number" name="tel" placeholder="Ej: 666999666" value="{{old('tel')}}">
                    <br>
                    <input type="submit" value="Validar datos">
                </form>
                @isset()
                    @foreach($saludos as $saludo)
                        <div class="title m-b-md">
                            {{$saludo -> saludo}} {{$nombre}}!
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>
    </body>
</html>
