?php
session_start();
include "koneksi.php";

if(isset($_POST['login'])){

    $username=$_POST['username'];
    $password=$_POST['password'];

    $query=mysqli_query($conn,"SELECT * FROM users
    WHERE username='$username'
    AND password='$password'");

    if(mysqli_num_rows($query)>0){

        $data=mysqli_fetch_assoc($query);

        $_SESSION['nama']=$data['nama'];
        $_SESSION['role']=$data['role'];

        header("Location: dashboard.php");

    }else{

        echo "<script>
        alert('Username atau Password Salah');
        </script>";

    }

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Login SIBIMA</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{

background:#eaf4ff;

}

.card{

margin-top:100px;
border-radius:15px;

}

</style>

</head>

<body>

<div class="container">

<div class="row justify-content-center">

<div class="col-md-4">

<div class="card shadow">

<div class="card-body">

<h3 class="text-center text-primary">
SIBIMA
</h3>

<hr>

<form method="POST">

<label>Username</label>

<input type="text"
name="username"
class="form-control"
required>

<br>

<label>Password</label>

<input type="password"
name="password"
class="form-control"
required>

<br>

<button
class="btn btn-primary w-100"
name="login">

Login

</button>

</form>

</div>

</div>

</div>

</div>

</div>

</body>

</html>
