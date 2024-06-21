<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Identificación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">

</head>
<body>

<div class="container">
    <div class="card p-4">
        <h2 class="text-center mb-4"><i class="bi bi-person"></i> Identificación</h2>

        <form method="post" action="identificacion.php">
            <div class="mb-3">
                <label for="password1" class="form-label"><i class="bi bi-lock"></i> Contraseña:</label>
                <input type="password" id="contrasena1" name="contrasena1" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password2" class="form-label"><i class="bi bi-lock"></i> Confirmar contraseña:</label>
                <input type="password" id="contrasena2" name="contrasena2" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary"><i class="bi bi-arrow-right"></i> Enviar</button>
        </form>
    </div>
</div>

</body>
</html>


