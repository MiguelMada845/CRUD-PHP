<?php
include("connection.php");

$con = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USUARIOS CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">

        
        <div class="card shadow-lg mb-4">
            <div class="card-header bg-dark text-white text-center p-3 rounded">
                <h2>Crear usuario</h2>
            </div>
            <div class="card-body">
                <form action="insert_user.php" method="POST" class="row g-3">
                    <div class="col-md-2">
                        <input type="text" name="name" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="lastname" class="form-control" placeholder="Apellido" required>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="username" class="form-control" placeholder="Nombre de usuario" required>
                    </div>
                    <div class="col-md-2">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                    </div>
                    <div class="col-md-3">
                        <input type="email" name="email" class="form-control" placeholder="Correo" required>
                    </div>
                    <div class="col-md-1 d-grid">
                        <button type="submit" class="btn btn-success">Agregar Usuario</button>
                    </div>
                </form>
            </div>
        </div>

        
        <div class="card shadow-lg">
            <div class="card-header bg-dark text-white text-center">
                <h3>Usuarios Registrados</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td><?= $row["id"] ?></td>
                            <td><?= $row["name"] ?></td>
                            <td><?= $row["lastname"] ?></td>
                            <td><?= $row["username"] ?></td>
                            <td><?= $row["password"] ?></td>
                            <td><?= $row["email"] ?></td>
                            <td>
                                <a href="update.php?id=<?= $row["id"] ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="delete_user.php?id=<?= $row["id"] ?>" class="btn btn-danger btn-sm"onclick="return confirm('¿Estás seguro de que quieres eliminar este usuario?');">Eliminar</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>
