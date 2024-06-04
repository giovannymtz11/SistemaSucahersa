<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
</head>

<body>

    @if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
    @endif

    @if(session('error'))
    <script>
        alert("{{ session('error') }}");
    </script>
    @endif

    <div class="container">
        <h2>Inicia sesion</h2>
        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <label for="usuario" class="form-label">Usuario:</label>
            <input type="text" class="form-control" id="usuario" placeholder="nombre@example.com" name="usuario" required>

            <label for="contrasena" class="form-label">Contraseña:</label>
            <input type="password" id="contrasena" class="form-control" aria-describedby="passwordHelpBlock" 
            placeholder="Recuerda que son mas de 8 caracteres." name="contrasena" required>

            <div class="checkbox-container">
                <input type="checkbox" id="showPassword" onclick="togglePassword()">
                <label for="showPassword">Mostrar contraseña</label>
            </div>

            <div class="links-container">
                <a href="{{ route('signin') }}">Registrarme</a>
                <a href="{{ route('forgotPassword') }}">Olvidé mi contraseña</a>
            </div>

            <input type="submit" value="Ingresar">

            <br> &copy;2024 Sucahersa. Todos los derechos reservados.
        </form>
    </div>

    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 400px;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="email"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        input[type="checkbox"] {
            margin-right: 10px;
        }

        input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s ease;
            width: calc(100% - 22px);
        }


        .links-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .links-container a {
            text-decoration: none;
            color: #333;
            transition: color 0.3s ease;
        }

        .links-container a:hover {
            color: #4CAF50;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #fa440d;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>

    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("contrasena");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>

</body>

</html>