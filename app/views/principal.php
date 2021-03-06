
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Solving exercise for Cube Summation challenges in hackerrank.">
    <meta name="author" content="goshmx">


    <title>Prueba técnica - Cube Summation</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="http://t4t5.github.io/sweetalert/dist/sweetalert.css"/>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container" style="max-width: 730px; margin-top: 10px;">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation"><a target="_blank" href="https://www.hackerrank.com/challenges/cube-summation">Ejercicio</a></li>
                <li role="presentation"><a target="_blank" href="https://github.com/goshmx/prueba-tecnica">@goshmx</a></li>

            </ul>
            <a class="btn btn-danger hide command-container-cubo" id="reset-cube" href="#">Reiniciar cubo</a>
        </nav>
        <h3 class="text-muted">Cube Summation</h3>
    </div>

    <div class="jumbotron form-container-cubo">
        <form id="form-config">
            <p class="lead">Configuración del cubo</p>
            <div class="form-group">
                <label for="exampleInputEmail1">Dimension Cubo(n):</label>
                <input type="number" required class="form-control input-form" id="inputN" name="n" placeholder="Dimensiones">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Numero operaciones(m):</label>
                <input type="number" required class="form-control input-form" id="inputM" name="m" placeholder="Operaciones">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Test cases(t):</label>
                <input type="number" required class="form-control input-form" id="inputT" name="t" placeholder="Test cases">
            </div>

        <p align="right"><button class="btn btn-lg btn-success" id="btn-config-cubo">Configurar</button></p>
        </form>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary hide command-container-cubo">
                <div class="panel-heading">Ingresar comandos</div>
                <div class="panel-body">
                    <div id="comando-insert">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon3">Comando: </span>
                            <input type="text" class="form-control" id="comando">
                            <span class="input-group-btn">
                                <button class="btn btn-success" id="btn-insert-command" type="button">Insertar!</button>
                            </span>
                        </div>
                    </div>
                    <div id="comandos-cont" style="padding: 10px; margin-top: 10px; background: #EEE;">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2016 goshmx</p>
    </footer>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="http://t4t5.github.io/sweetalert/dist/sweetalert-dev.js"></script>
<script src="/assets/app.js"></script>
</body>
</html>
