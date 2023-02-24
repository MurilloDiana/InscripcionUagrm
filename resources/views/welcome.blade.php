<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>UAGRM</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">    
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <img src="{{asset('img/logo.jpg')}}" alt="" width="300" height="300">
            </div>
            <h3>Bienvenidos al Sistema de Inscripciones UAGRM</h3>
            <p>Iniciar Sesi&oacute;n</p>
            <form class="m-t" role="form" action="" method="post">
                
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Usuario" required="" name="login">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                </div>
               
                
                <a type="submit" class="btn btn-primary block full-width m-b" href="{{ url('informacion') }}">Login</a>
                
            </form>
            <p class="m-t"> <small>IHC&copy; 2023</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>

</body>

</html>
