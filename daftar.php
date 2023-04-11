<?php
    include 'koneksi.php';

    error_reporting(0);

    session_start();

    if(isset($_SESSION['username'])) {
        header("Location: index.php");
    }

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        
        if($password == $cpassword) {
            $sql = "SELECT * FROM laporan4 WHERE username='$username'";
            $result = mysqli_query($conn, $sql);
            if(!$result->num_rows > 0) {
                $sql = "INSERT INTO laporan4 (username, email, password) VALUES ('$username', '$email', '$password')";
                $result = mysqli_query($conn, $sql);
                if($result) {
                    echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                    $username = "";
                    $email = "";
                    $_POST['password'] = "";
                    $_POST['cpassword'] = "";
                } else {
                    echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
                }
            } else {
                echo "<script>alert('Woops! Username sudah terdaftar.')</script>";
            }
            
        } else {
            echo "<script>alert('Password tidak sesuai')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style_index.css">
</head>
<body>
    <div class="container">
        <h1>Daftar</h1>
        <form action="" method="post" class="login-email">
            <!-- <input type="hidden" name="tujuan" value="DAFTAR"> -->

            <label for="">Username</label>
            <br>
            <input type="text" name="username" value="<?= $username; ?>" required>
            <br>
            <label for="">Email</label>
            <br>
            <input type="text" name="email" value="<?= $email; ?>" required>
            <br>
            <label for="">Passsword</label>
            <br>
            <input type="password" name="password" value="<?= $_POST['password']; ?>", required>
            <br>
            <label for="">Confirm Password</label>
            <br>
            <input type="password" name="cpassword" value="<?= $_POST['cpassword']; ?>" required>
            <button name="submit">Daftar</button>
            <p> Sudah punya akun?
                <a href="index.php">Login disini</a>
            </p>
        </form>
    </div>
</body>
</html>