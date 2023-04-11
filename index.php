<?php
    include 'koneksi.php';

    error_reporting(0);

    session_start();

    if (isset($_SESSION['username'])) {
        header("Location:halamanutama.php");
    }

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM laporan4 WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if($result->num_rows == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("Location:halamanutama.php");
        } else {
            echo "<script>alert('Username atau password anda salah. Silahkan coba lagi!')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style_index.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="" method="post" class="login-email">

            <label for="">Username</label>
            <br>
            <input type="text" name="username" value="<?= $username; ?>" required>
            <br>
            <label for="">Password</label>
            <br>
            <input type="password" name="password" value="<?= $_POST['password']; ?>" required>
            <br>

            <button name="submit">Log In</button>

            <p> Belum Punya Akun?
                <a href="daftar.php">Daftar disini</a>
            </p>
        </form>
    </div>
</body>
</html>