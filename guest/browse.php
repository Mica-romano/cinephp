<?php
session_start();
if (isset($_SESSION['username'])) {
    if ($_SESSION['status'] == "admin") {
        header('location: ../admin/index.php');
    } else {
        header('location: ../user/index.php');
    }
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Busca tu pelicula favorita</title>
    <!-- <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">-->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css"> -->

    <link rel="stylesheet" href="../css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/popup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top ">
               <!-- Logo -->
       <a class="navbar-brand " href="#">
        <img src="../image/2.png " alt="logo "> <strong> CINEMA</strong>
        </a>
        <!-- Links -->
        <ul class="navbar-nav mr-auto">

        </ul>
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">✷ Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">✷ Buscar Peliculas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index.php#popup1">✷ Iniciar Sesion</a>
            </li>
        </ul>
    </nav>


    <div class="container-fluid body">
        <div class="container">
            <div class="sbox">

                <div>
                    <center>
                        <div class="content">
                            <h1 style="color: white">★ Cinema ★ <br> Informacion sobre mas de 10.000 peliculas</h1><br>
                            <p style="color: white">
                                Bienvenidos a
                                <span style="font-weight:bold; color: red">Cinema</span>  |En este sitio encontraras toda la informacion de tu pelicula favorita. Cinema Movies es reconocido por su excelencia.Aqui obtendras 
                                <span style="font-weight:bold; color: red">Informacion  </span>| de todas y cada una de las peliculas estrenadas y no estrenadas.Proporcionamos esta informacion con la ayuda de   
                                <span style="font-weight:bold; color: red">MovieDB </span> |Films conocidos por sus recursos cinematograficos .
                                <span style="font-weight:bold; color: red">Buscador </span> |Obtenga aspectos detallados de su film favorito.
                            </p>
                        </div>
                    </center>
                    <form id="searchForm">
                        <input type="text" class="searchBox" placeholder="Escribe la pelicula aqui" id="searchText">
                    </form>
                </div>
            </div>
        </div>

        <div class="container">
            <div id="movies" class="row"></div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; Copyright MDP Developers.</p>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="../js/main.js"></script>
    <script>
        popularMovies();
    </script>
</body>

</html>