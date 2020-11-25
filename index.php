<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="estilos.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
    <style type="text/css">
        .wrapper{
            min-width: 468px;
            width: auto;
            max-width:1080px;
            margin-top: -148px;
            margin-left: 0px;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
   
	<nav class="menu">
	
    <a href="#prueba">Productos</a>
    <a href="#prueba2">Contacto</a>
</nav>

<main class="container">
    <div class="row nosotros justify-content-center">
        <div class="col-12 text-center">
            <h2 class="subtitulo"><span>LA FARMACIA 45</span></h2>	
            <a href="#" class="enlace"></a>
        </div>
    </div>
    <div class="Cuadro">

    </div>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Empleados</h2>
                        <a href="create.php" class="btn btn-success pull-right">Agregar nuevo empleado</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Nombre</th>";
                                        echo "<th>Dirección</th>";
                                        echo "<th>Sueldo</th>";
                                        echo "<th>Acción</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['salary'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='read.php?id=". $row['id'] ."' title='Ver' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='update.php?id=". $row['id'] ."' title='Actualizar' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete.php?id=". $row['id'] ."' title='Borrar' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</div>
    <span class=".productos .btnproductos"></span>
    <p><a name="prueba"></a></p>
    <div class="row productos">
        <article class="col-12 text-center">
            <h2 class="subtitulo"><span>Lo que ofrecemos</span></h2>
            <p class="titulo">Nuestros Produtos</p>
            <p>Muebleria diseñada para la comodidad de tu hogar con los mejores diseños que remarcaran elegancia en el centro de tu casa, tambien puedes adquirir articulos 3d con diseños personalisados por el comprador.</p>
        </article>

        <div class="col-12">
            <div class="row justify-content-center">
                <article class="col-6 col-lg-3 py-1">
                    <figure class="producto">
                        <img src="img/products/mueble-1.jpg" class="img-fluid" alt="">
                        <figcaption class="overlay">
                            <p class="overlay-texto">Descripción pequeña</p>
                        </figcaption>
                    </figure>
                </article>

                <article class="col-6 col-lg-3 py-1">
                    <figure class="producto">
                        <img src="img/products/mueble-2.jpg" class="img-fluid" alt="">
                        <figcaption class="overlay">
                            <p class="overlay-texto">Descripción pequeña</p>
                        </figcaption>
                    </figure>
                </article>

                <article class="col-6 col-lg-3 py-1">
                    <figure class="producto">
                        <img src="img/products/mueble-3.jpg" class="img-fluid" alt="">
                        <figcaption class="overlay">
                            <p</p</p class="overlay-texto">Descripción pequeña</p>
                        </figcaption>
                    </figure>
                </article>

                <article class="col-6 col-lg-3 py-1">
                    <figure class="producto">
                        <img src="img/products/mueble-4.jpg" class="img-fluid" alt="">
                        <figcaption class="overlay">
                            <p class="overlay-texto">Descripción pequeña</p>
                        </figcaption>
                    </figure>
                </article>
            
            </div>
        </div>
    </div>

<!--<div class="separador text-center text-white">-->

</div>

<div class="container">
    <div class="row acerca-de justify-content-around">
        <article class="col-10 col-sm-5">
            <figure class="text-center">
                <img src="img/icons/icon-team.png" alt="">
                <figcaption>
                    <p>
                        <strong class="mb-2">Un equipo de expertos</strong>
                        <div class="w-100"></div>
                        comprometidos con la satisfación del cliente
                    </p>
                </figcaption>
            </figure>
        </article>

        <article class="col-10 col-sm-5">
            <figure class="text-center">
                <img src="img/icons/icon-services.png" alt="">
                <figcaption>
                    <p>
                        <strong class="mb-2">Una historia de servicio</strong>
                        <div class="w-100"></div>
                        tiene los mismos años que tu papá trabajando para mejorar tu hogar
                    </p>
                </figcaption>
            </figure>
        </article>
    </div>
</div>
<div class="container-fluid">
    <p><a name="prueba2"></a></p>
    <section class="contacto row justify-content-center">
        <div class="col-12 col-md-9 text-center">
            <h2 class="subtitulo"><span>UNACH</span></h2>
        </div>
        <div>
        <img src="img/25_logo_web_lr" class="img-fluid" alt="">
        </div>
     <!--   <div class="w-100 mb-4"></div>
        <div>-->

    </section>

    <footer class="row justify-content-center redes-sociales">
     <div class="menu">

     </div>
    </footer>
</div>

<script src="main.js"></script>
</body>
</html>