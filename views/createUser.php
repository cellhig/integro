<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../vendor/bootstrap-3.4.1-dist/css/bootstrap.min.css">
</head>
<body>    
    <div id="wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <h2 class="text-primary text-center mt-5">Registrarse</h2>
                    <hr>
                    <form method="POST" action="../createUser.php">
                        <input type="text" class="form-control mb-2" id="name" name="name" placeholder="Nombre">
                        <input type="text" class="form-control mb-2" id="nickname" name="nickname" placeholder="nickname">
                        <input type="password" class="form-control mb-2" name="password" placeholder="Contraseña">
                        <input type="password" class="form-control mb-2" name="passwordTwo" placeholder="Repita su contraseña">
                        <div class="action mb-2">¿Tienes cuenta? <a href="login.php">Inicia sesión</a></div>
                        <button type="submit" class="btn btn-secondary">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <script src="../vendor/jQuery/jquery-3.4.1.min.js"></script>
        <script src="../vendor/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
        
        <script src="../js/createUser.js"></script>
</body>
</html>