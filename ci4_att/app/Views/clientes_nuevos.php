<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevos Planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
    .form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        max-width: 350px;
        background-color: #fff;
        padding: 20px;
        border-radius: 20px;
        position: relative;
    }

    .title {
        font-size: 28px;
        color: royalblue;
        font-weight: 600;
        letter-spacing: -1px;
        position: relative;
        display: flex;
        align-items: center;
        padding-left: 30px;
    }

    .title::before,
    .title::after {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        border-radius: 50%;
        left: 0px;
        background-color: royalblue;
    }

    .title::before {
        width: 18px;
        height: 18px;
        background-color: royalblue;
    }

    .title::after {
        width: 18px;
        height: 18px;
        animation: pulse 1s linear infinite;
    }

    .message,
    .signin {
        color: rgba(88, 87, 87, 0.822);
        font-size: 14px;
    }

    .signin {
        text-align: center;
    }

    .signin a {
        color: royalblue;
    }

    .signin a:hover {
        text-decoration: underline royalblue;
    }

    .flex {
        display: flex;
        width: 100%;
        gap: 6px;
    }

    .form label {
        position: relative;
    }

    .form label .input {
        width: 100%;
        padding: 10px 10px 20px 10px;
        outline: 0;
        border: 1px solid rgba(105, 105, 105, 0.397);
        border-radius: 10px;
    }

    .form label .input+span {
        position: absolute;
        left: 10px;
        top: 15px;
        color: grey;
        font-size: 0.9em;
        cursor: text;
        transition: 0.3s ease;
    }

    .form label .input:placeholder-shown+span {
        top: 15px;
        font-size: 0.9em;
    }

    .form label .input:focus+span,
    .form label .input:valid+span {
        top: 30px;
        font-size: 0.7em;
        font-weight: 600;
    }

    .form label .input:valid+span {
        color: green;
    }

    .submit {
        border: none;
        outline: none;
        background-color: royalblue;
        padding: 10px;
        border-radius: 10px;
        color: #fff;
        font-size: 16px;
        transform: .3s ease;
    }

    .submit:hover {
        background-color: rgb(56, 90, 194);
    }

    @keyframes pulse {
        from {
            transform: scale(0.9);
            opacity: 1;
        }

        to {
            transform: scale(1.8);
            opacity: 0;
        }
    }

    body {
        width: 100%;
        height: 100%;
        background: radial-gradient(circle farthest-side at 0% 50%,
                #282828 23.5%,
                rgba(255, 170, 0, 0) 0) 21px 30px,
            radial-gradient(circle farthest-side at 0% 50%,
                #2c3539 24%,
                rgba(240, 166, 17, 0) 0) 19px 30px,
            linear-gradient(#282828 14%,
                rgba(240, 166, 17, 0) 0,
                rgba(240, 166, 17, 0) 85%,
                #282828 0) 0 0,
            linear-gradient(150deg,
                #282828 24%,
                #2c3539 0,
                #2c3539 26%,
                rgba(240, 166, 17, 0) 0,
                rgba(240, 166, 17, 0) 74%,
                #2c3539 0,
                #2c3539 76%,
                #282828 0) 0 0,
            linear-gradient(30deg,
                #282828 24%,
                #2c3539 0,
                #2c3539 26%,
                rgba(240, 166, 17, 0) 0,
                rgba(240, 166, 17, 0) 74%,
                #2c3539 0,
                #2c3539 76%,
                #282828 0) 0 0,
            linear-gradient(90deg, #2c3539 2%, #282828 0, #282828 98%, #2c3539 0%) 0 0 #282828;
        background-size: 40px 60px;
    }
    </style>
</head>

<body>
    <div class="text-center">
        <div class="row ">
            <h1 class="text-light col align-self-center">Formulario de Registro Nuevo Cliente</h1>
        </div>
    </div>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <form action="agregar_clientes" method="post" class="form">
            <p class="title">Registrate</p>
            <p class="message">Registra un nuevo Cliente</p>
            <div class="flex">
                <label>
                    <input required="" placeholder="" type="text" class="input" id="txtCliente" name="txtCliente">
                    <span>Cliente Id</span>
                </label>
            </div>
            <div class="flex">
                <label>
                    <input required="" placeholder="" type="text" class="input" id="txtNombre" name="txtNombre">
                    <span>Nombre</span>
                </label>
                <label>
                    <input required="" placeholder="" type="text" class="input" id="txtApellido" name="txtApellido">
                    <span>Apellido</span>
                </label>
            </div>
            <label>
                <input required="" placeholder="" type="text" class="input" id="txtNit" name="txtNit">
                <span>Nit</span>
            </label>
            <label>
                <input required="" placeholder="" type="text" class="input" id="txtTelefono" name="txtTelefono">
                <span>Telefono</span>
            </label>
            <label>
                <input required="" placeholder="" type="email" class="input" id="txtCorreo" name="txtCorreo">
                <span>Correo Electronico</span>
            </label>
            <label>
                <input required="" placeholder="" type="text" class="input" id="txtDireccion" name="txtDireccion">
                <span>Dirección</span>
            </label>
            <label>
                <input required="" placeholder="" type="password" class="input" id="txtContra" name="txtContra">
                <span>Contraseña</span>
            </label>
            <button type="submit" class="submit">Guardar Clientes</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>