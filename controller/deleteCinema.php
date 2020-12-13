<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../guest/index.php#popup1');
}

include('connectdb.php');
$id=$_CINE['id'];

$del = "DELETE  FROM cinema WHERE cineid= '$id'"; 
$result = $conn -> query($del);
header("Location: ../admin/admincinema.php"); 
$conn->close();
?>

<!-- Controlador Borrar cine-->

<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../guest/index.php#popup1');
}

include('connectdb.php');
$id=$_REQUEST['id'];

$del = "DELETE  FROM userdata WHERE UserId= '$id'"; 
$result = $conn -> query($del);
header("Location: ../admin/users.php"); 
$conn->close();
?>
<!-- Controlador Borrar usuarios-->