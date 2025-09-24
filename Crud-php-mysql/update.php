<?php
include("connection.php");
$con = connection();

$id = $_GET["id"];

$sql = "SELECT * FROM users WHERE id = $id";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">

        <div class="card shadow-lg">
            <div class="card-header bg-dark text-white text-center p-3 rounded"">
                <h2>Editar Usuario</h2>
            </div>
            <div class="card-body">
                <form action="edit_user.php" method="POST" class="row g-3">
                    
                    <input type="hidden" name="id" value="<?= $row["id"] ?>">

                    <div class="col-md-4">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="name" class="form-control" value="<?= $row["name"] ?>" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Apellido</label>
                        <input type="text" name="lastname" class="form-control" value="<?= $row["lastname"] ?>" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Usuario</label>
                        <input type="text" name="username" class="form-control" value="<?= $row["username"] ?>" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Contraseña</label>
                        <input type="text" name="password" class="form-control" value="<?= $row["password"] ?>" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Correo</label>
                        <input type="email" name="email" class="form-control" value="<?= $row["email"] ?>" required>
                    </div>

                    <div class="col-12 d-flex justify-content-between">
                        <a href="index.php" class="btn btn-secondary">Volver</a>
                        <button type="submit" class="btn btn-success">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
