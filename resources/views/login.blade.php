<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        
        <link href="{{ asset('public/css/login.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous">
        
        
        </script>
        <script src="{{ asset('public/js/jquery-3.4.1.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{ asset('public/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{ asset('public/js/scripts.js')}}"></script>
	</head>
    <body class="bg-primary">
        <div class="box">
            <form method="POST" autocomplete="off">
                @csrf
                <h2>Iniciar sesión</h2>
                <div class="inputBox">
                    <input type="text" name="usuario" required>
                    <span>Usuario</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" name="clave" required>
                    <span>Clave</span>
                    <i></i>
                </div>
                
                <input type="submit" value="Login">
            </form>
        </div>
        
	</body>
</html>