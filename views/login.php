<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../vendor/bootstrap-3.4.1-dist/css/bootstrap.min.css">
</head>
    <body>
        <div id="wrapper">
            <div class="conatiner">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <h2 class="text-primary text-center mt-5">Iniciar Sesión</h2>
                        <hr>
                        <form action="" method="post" id="form">
                            <input type="text" class="form-control mb-2" name="nickname" id="nickname">
                            <input type="password" class="form-control mb-2"name="password" id="password">
                            <div class="action mb-2">¿No tienes cuenta? <a href="createUser.php">Registrate</a></div>
                            <button type="submit" class="btn btn-secondary">Iniciar Sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="../vendor/jQuery/jquery-3.4.1.min.js"></script>
        <script src="../vendor/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
    </body>
</html>