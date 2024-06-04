<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olvidé mi contraseña</title>
    <link rel="stylesheet" href="sistemaTickets/resources/css/forgot_password.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 400px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #666;
        }

        input[type="email"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #4CAF50;
            outline: none;
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

        .btn-regresar {
        text-decoration: none; 
        display: inline-block;
        padding: 10px 20px;
        background-color: #fa440d;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-align: center;
    }

        .btn-regresar:hover {
            background-color: #be380f;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Olvidé mi contraseña</h1>
    <p>Ingresa tu correo electrónico y tu nueva contraseña para restablecer tu contraseña.</p>
    <form action="{{ route('updatePassword') }}" method="POST">
        @csrf
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
    
        <label for="password">Nueva contraseña:</label>
        <input type="password" id="password" name="password" required>
    
        <label for="password_confirmation">Confirmar contraseña:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
    
        <input type="submit" value="Actualizar cambios"> <br>
    </form>

    <a href="{{route('login')}}" class="btn-regresar">Ir atrás</a>
</div>

</body>
</html>

