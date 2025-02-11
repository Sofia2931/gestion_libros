<?php 
include "functions/read.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><i data-feather="home"></i> Inicio</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                          
                            <li class="nav-item">
                                <a class="nav-link" href="pages/register.php">
                                    <i data-feather="book"></i> Registrar Libro
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/contact.php">
                                    <i data-feather="mail"></i> Contacto
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="col-md-9 col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Mi Libreria</h1>

                </div>


                <h2>Libros</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                    <thead>
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($libros as $libro): ?>
            <tr>
                <td><?php echo htmlspecialchars($libro['titulo']); ?></td>
                <td><?php echo htmlspecialchars($libro['autor']); ?></td>
                <td><?php echo htmlspecialchars($libro['precio']); ?></td>
                <td><?php echo htmlspecialchars($libro['cantidad']); ?></td>
                <td>
                    <a href="functions/crud/update.php?id=<?php echo $libro['id']; ?>">Editar</a> |
                    <a href="functions/crud/delete.php?id=<?php echo $libro['id']; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.min.js"></script>
    <script>
        feather.replace()
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: 'rgba(0, 119, 204, 0.3)',
                    borderColor: 'rgb(0, 119, 204)',
                    data: [0, 10, 5, 2, 20, 30, 45]
                }]
            },
            options: {}
        });
    </script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>