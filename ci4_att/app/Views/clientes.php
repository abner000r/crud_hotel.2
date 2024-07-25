<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
      .tabla-1{
        margin :2%
      }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        margin: 2%;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 25px 16px;
        text-decoration: none;
    }

    li a:hover {
        background-color: #111;
    }

    body {
        width: 100%;
        height: 100%;
        --s: 37px;
        /* control the size */

        --c: #0000, #282828 0.5deg 119.5deg, #0000 120deg;
        --g1: conic-gradient(from 60deg at 56.25% calc(425% / 6), var(--c));
        --g2: conic-gradient(from 180deg at 43.75% calc(425% / 6), var(--c));
        --g3: conic-gradient(from -60deg at 50% calc(175% / 12), var(--c));
        background: var(--g1), var(--g1) var(--s) calc(1.73 * var(--s)), var(--g2),
            var(--g2) var(--s) calc(1.73 * var(--s)), var(--g3) var(--s) 0,
            var(--g3) 0 calc(1.73 * var(--s)) #1e1e1e;
        background-size: calc(2 * var(--s)) calc(3.46 * var(--s));
    }
  
    </style>
</head>

<body>
    <ul>

        <li><a class="active" href="clientes">Clientes</a></li>
        <li><a href="hoteles">Hoteles</a></li>
        <li><a href="reservacion">Reservación</a></li>

    </ul>

        <div class="tabla-1">
            <h1 class="text-center">Clientes</h1>
            <a href="nuevos_clientes" class="btn btn-primary">Nuevos Clientes</a>

            <table class="table table-striped table-border text-center">
                <thead class="text-center">
                    <tr class="table-success">
                        <th>Cliente Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Nit</th>
                        <th>Telefono</th>
                        <th>Correo Electronico</th>
                        <th>Dirección</th>
                        <th>Contraseña</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($datos as $clientes):?>
                    <tr class="table-warning">
                        <td><?php echo $clientes['cliente_id'];?></td>
                        <td><?php echo $clientes['nombre'];?></td>
                        <td><?php echo $clientes['apellido'];?></td>
                        <td><?php echo $clientes['nit'];?></td>
                        <td><?php echo $clientes['telefono'];?></td>
                        <td><?php echo $clientes['correo_electronico'];?></td>
                        <td><?php echo $clientes['direccion'];?></td>
                        <td><?php echo $clientes['contrasenia'];?></td>
                        <td>
                        <a href="" class="btn btn-primary"><i
                                    class="bi bi-pencil-fill"></i></a>
                            <a href="eliminar_cliente/<?php echo $clientes['cliente_id']?>"  class="btn btn-danger"><i
                                    class="bi bi-person-dash-fill"></i></a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
        </div>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>