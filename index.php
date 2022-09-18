<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Combobox con Jquerys y AJAX</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/iconfinder.svg" alt="" style="max-width:40px ;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Autor</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Listar
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Categoria</a></li>
                            <li><a class="dropdown-item" href="#">Productos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Detalle</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Muy pronto</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

<div class="container">
    <div class="row">
        <div class="col bg-light p-2 text-center py-3">
            <h3>Combos dependientes con jQuery, Ajax y PHP</h3>
           
        </div>
    </div>
</div>


    <div class="container py-3">
        <div class="row ">
            <div class="col ">
                <div class="">   
                <form class="row" action="" method="post">
                    <div class="form-group col-lg-6">
                        <label for="marca" class="fw-bold p-2">Marca</label>
                        <select name="marca" id="marca" class="form-select form-select-sm" aria-label="Default select example">
                            <option value="">Seleccione</option>
                            <option value="1">Renault</option>
                            <option value="2">Seat</option>
                            <option value="3">Peugeot</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="modelo" class="fw-bold p-2">Modelo</label>
                        <select name="modelo" id="modelo" class="form-control form-select-sm" aria-label="Default select example">
                            <option value="">Seleccione una opción</option>
                        </select>
                    </div>
                </form>
     </div>           
            </div>
        </div>
    </div>



    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script language="javascript">
        $(document).ready(function () {
            $("#marca").on('change', function () {
                $("#marca option:selected").each(function () {
                    elegido = $(this).val();
                    $.post("llamamos.php", { elegido: elegido }, function (data) {
                        $("#modelo").html(data);
                    });
                });
            });
        });
    </script>

<div class="container">
    <div class="row">
        <div class="col bg-light p2 text-center">
            <pre class="fst-italic py-3 p-2"> <strong>Fuente original: </strong> https://www.jose-aguilar.com/blog/combos-dependientes-con-jquery-ajax-y-php/#codesyntax_3</pre>
        </div>
    </div>
</div>

</body>

</html>