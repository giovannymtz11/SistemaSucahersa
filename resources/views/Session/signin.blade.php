
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Registro</h1>                </div>
                <div class="modal-body">
                    <form action="{{ route('register') }}" method="POST" onsubmit="return verifyPasswords()">
                        @csrf
                        <div>
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" required>
                        </div>
                        <div>
                            <label for="email">Usuario:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div>
                            <label for="contrasena">Contraseña:</label>
                            <input type="password" id="contrasena" name="contrasena" required placeholder="Mínimo 8 caracteres.">
                        </div>
                        <div>
                            <label for="verify_contrasena">Verificar Contraseña:</label>
                            <input type="password" id="verify_contrasena" name="contrasena_confirmation" required placeholder="Verifique que sea la misma contraseña.">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <input type="submit" value="Registrarme">
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 400px;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
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

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #4CAF50;
            outline: none;
        }

        input[type="submit"],
        input[type="button"] {
            padding: 10px 20px;
            background-color: #fa440d;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button {
            padding: 10px 20px;
            background-color: #fa440d;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover,
        input[type="button"]:hover,
        button:hover {
            background-color: #45a049;
        }
    </style>

    <script>
        function verifyPasswords() {
            var password = document.getElementById("contrasena").value;
            var verifyPassword = document.getElementById("verify_contrasena").value;

            if (password !== verifyPassword) {
                alert("Las contraseñas no coinciden");
                return false;
            }

            return true;
        }
    </script>