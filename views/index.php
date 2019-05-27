<!DOCTYPE html>
<html>
    <head>
        <title>Gestión de Peliculas</title>
        <!-- <link rel="stylesheet" href="../vendor/bootstrap-3.4.1-dist/css/bootstrap.min.css"> -->
        <!-- <link rel="stylesheet" href="../vendor/bootstrap-3.4.1-dist/css/bootstrap.min.css"> -->
    <script  src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </head>
    <body>
    <h2>HOLA <?= $_SESSION['nickname']?></h2>
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <form id="moviesForm" >
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" class="form-control" id="title" placeholder="título">
                </div>
                <div class="form-group">
                    <label for="date">Fecha de estreno</label>
                    <input type="date" class="form-control" id="date">
                </div>
                <div class="form-group">
                    <label for="synopsis">Sinopsis</label>
                    <textarea class="form-control" name="synopsis" id="synopsis" cols="30" rows="10"></textarea>
                    <!-- <input class="form-control" name="synopsis" id="synopsis" > -->
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        <div class="col-lg-2">
        </div>
    
    </div>
    
    <br><br>
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <table class="table table-hover text-center">
                <thead>
                    <th>id</th>
                    <th>nombre</th>
                    <th>fecha de estreno</th>
                    <th>editar</th>
                    <th>eliminar</th>
                </thead>
                <tbody id="data-table">
                </tbody>
            </table>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
    <script src="js/index.js"></script>
        <!-- <script src="../vendor/jQuery/jquery-3.4.1.min.js"></script>
        <script src="../vendor/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script> -->
    </body>
</html>

