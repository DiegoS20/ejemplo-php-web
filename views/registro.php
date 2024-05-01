<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Registro de Datos</h2>
        <form action="controllers/agregar.php" method="post">
            <div class="form-group">
                <label for="nombre">País</label>
                <input required autocomplete="off" type="text" class="form-control" id="nombre" name="nombre"
                    placeholder="Ingrese el país">
            </div>
            <div class="form-group">
                <label for="capital">Capital</label>
                <input required autocomplete="off" type="text" class="form-control" id="capital" name="capital"
                    placeholder="Ingrese la capital">
            </div>
            <div class="form-group">
                <label for="moneda">Moneda</label>
                <input required autocomplete="off" type="text" class="form-control" id="moneda" name="moneda"
                    placeholder="Ingrese la moneda">
            </div>
            <div class="form-group">
                <label for="ave">Ave Nacional</label>
                <input required autocomplete="off" type="text" class="form-control" id="ave" name="ave"
                    placeholder="Ingrese el ave nacional">
            </div>
            <div class="form-group">
                <label for="arbol">Árbol Nacional</label>
                <input required autocomplete="off" type="text" class="form-control" id="arbol" name="arbol"
                    placeholder="Ingrese el árbol nacional">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>

    <!-- Bootstrap JS (opcional si necesitas funcionalidad JS de Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>