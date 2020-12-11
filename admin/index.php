<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../guest/index.php');
}
else{ 
    if ($_SESSION['status'] != "admin") {
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
    <title>Bienvenido a Cinema</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>

    <!-- Latest compiled and minified CSS -->
    <link rel=" stylesheet " href="../css/bootstrap.min.css ">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/popup.css">

</head>

<body> 
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top"> <!-- style="background-color: blue"-->
        <!-- Brand/logo -->
        <a class="navbar-brand " href="#">
        <img src="../image/2.png " alt="logo "> <strong> CINEMA</strong>
        </a>

        <!-- Links -->
        <ul class="navbar-nav mr-auto ">
        </ul>
        <!-- Links -->
        <ul class="navbar-nav ">
            <li class="nav-item ">
                <a class="nav-link active " href="index.php"> | Inicio</a>
           <!-- <li class="nav-item ">
                <a class="nav-link" href="moviesrequest.php"> | Movies Request Pending</a>
            </li>
            </li> -->
            <li class="nav-item ">
                <a class="nav-link " href=""> | Ingresar proyecciones</a>
            </li>
            </li> 
            <li class="nav-item ">
                <a class="nav-link " href="users.php"> | Gestionar usuarios</a>
            </li>
            </li> 
            <li class="nav-item ">
                <a class="nav-link" href="admincinema.php"> | Administrar cines</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href=""> | Entradas vendidas y remanentes</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href=""> | Dinero recaudado</a>
            </li>

            <li class="nav-item dropdown dropleft">
                <a class="nav-link" href="#" data-toggle="dropdown"> | Cuenta
                    <img src="../image/default-user.png" style="width:30px; border-radius:50%;" alt="logo ">
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item disabled" style="color:silver; text-transform:lowercase;" href="#"><?php echo $_SESSION['username'] ?></a>
                    <a class="dropdown-item" style="color:#fff;" href="../controller/logout.php">Log Out</a>
                </div>
            </li>
        </ul>
    </nav>

    <header>
        <div class="container body ">
            <center>
                <div class=" inner-body ">
                    <h1 class="title "> Cinema <br>
                        <span style="color: white;">Panel de Administrador</span>
                    </h1>
                    <p style="color: white" class="content">
                       Bienvenido a 
                        <span style="font-weight:bold; color: red">Cinema MDP</span> | En esta seccion podras administrar la informacion de cada 
                        <span style="font-weight:bold; color: red">Cine y proyeccion.</span> Con la ayuda de la pagina de 
                        <span style="font-weight:bold; color: red">MovieDB </span> podras obtener una amplia lista de peliculas para utilizar en tu 
                        <span style="font-weight:bold; color: red">Cartelera de cine</span> 
                    </p>
                </div>
                <div class="container">
                    <a href="moviesrequest.php" class="btn-main">
                        Ingresar proyecciones
                    </a>
                    <a href="users.php" class="btn-main ">
                        Gestionar Usuarios
                        </a>
                    </a>
                     <a href="admincinema.php" class="btn-main ">
                        Administrar cines
                    </a> <br> <br>
                    <a href="" class="btn-main ">
                        Entradas vendidas y remanentes
                    </a>
                    <a href="" class="btn-main ">
                        Dinero recaudado
                    </a>
                </div>

            </center>
        </div>
    </header>

    <div class="footer">
        
        <p>&copy; Copyright MDP Developers</p>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</body>

</html>