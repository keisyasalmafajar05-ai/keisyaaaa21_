<?php
session_start();

if(!isset($_SESSION['nama'])){
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-dark bg-primary">

<div class="container">

<span class="navbar-brand">

SIBIMA

</span>

<a href="logout.php"
class="btn btn-light">

Logout

</a>

</div>

</nav>

<div class="container mt-5">

<div class="card">

<div class="card-body">

<h2>

Selamat Datang

<?php

echo $_SESSION['nama'];

?>

</h2>

<h5>

Role :

<?php

echo $_SESSION['role'];

?>

</h5>

<hr>

<?php

if($_SESSION['role']=="admin"){

echo "<h3>Dashboard Admin</h3>";

}

if($_SESSION['role']=="dosen"){

echo "<h3>Dashboard Dosen</h3>";

}

if($_SESSION['role']=="mahasiswa"){

echo "<h3>Dashboard Mahasiswa</h3>";

}

?>

</div>

</div>

</div>

</body>

</html>
