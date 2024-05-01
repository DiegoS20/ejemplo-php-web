<?php
require_once ('../models/Pais.php');

$query = @$_GET["query"];
$paises = is_null($query) ? Pais::all() : Pais::findByName($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Components</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <!-- Input de búsqueda y botón -->
        <form action="" method="get" class="row mb-3">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Buscar por nombre de país" name="query" id="query">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary">Buscar</button>
            </div>
        </form>

        <a class="btn btn-success mb-3">Agregar país</a>

        <!-- Tabla -->
        <table class="table">
            <thead>
                <tr>
                    <th>Pais</th>
                    <th>Capital</th>
                    <th>Moneda</th>
                    <th>Ave Nacional</th>
                    <th>Arbol Nacional</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($paises as $pais): ?>
                    <tr>
                        <td><?= $pais['nombre'] ?></td>
                        <td><?= $pais['capital'] ?></td>
                        <td><?= $pais['moneda'] ?></td>
                        <td><?= $pais['ave'] ?></td>
                        <td><?= $pais['arbol'] ?></td>
                        <td>
                            <!-- Botones de eliminar y editar -->
                            <a class="btn btn-danger btn-sm"
                                href="controllers/delete.php?id=<?= $pais['id_pais'] ?>">Eliminar</a>
                            <a class="btn btn-primary btn-sm">Editar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (opcional si necesitas funcionalidad JS de Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>