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
        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Buscar">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary">Buscar</button>
            </div>
        </div>

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
                <!-- Aquí puedes agregar filas dinámicamente con datos -->
                <tr>
                    <td>Argentina</td>
                    <td>Buenos Aires</td>
                    <td>Peso argentino</td>
                    <td>Hornero</td>
                    <td>Árbol de Ceibo</td>
                    <td>
                        <!-- Botones de eliminar y editar -->
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                        <button class="btn btn-primary btn-sm">Editar</button>
                    </td>
                </tr>
                <tr>
                    <td>Brasil</td>
                    <td>Brasilia</td>
                    <td>Real brasileño</td>
                    <td>Sabía-laranjeira</td>
                    <td>Pau-brasil</td>
                    <td>
                        <!-- Botones de eliminar y editar -->
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                        <button class="btn btn-primary btn-sm">Editar</button>
                    </td>
                </tr>
                <!-- Agregar más filas según sea necesario -->
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (opcional si necesitas funcionalidad JS de Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>