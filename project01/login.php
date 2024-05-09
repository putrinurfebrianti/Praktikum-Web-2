<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Times;
            background-image: url('bg.jpg'); 
            background-size: cover; 
            background-position: center;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: left;
        }

        .login-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 250px;
            width: 100%;
            height: 50%;
            margin: 0 auto;
           
        }

        .login-box h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
            width: 100%;
            max-width: 300px;
            text-align: center;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            text-align: left;
        }

        .input-group input {
            width: calc(100% - 10px);
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .social-media {
            margin-top: 20px;
        }

        .social-media img {
            width: 40px; /* Atur lebar gambar */
            margin: 0 20px; /* Atur jarak antara gambar */
        }
    </style>
     <div class="login-box">
<?php
if(isset($_POST['submit'])){
    require_once 'dbkoneksi.php';

    $user = $dbh->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $user->execute([
        $_POST['email'], $_POST['password'],
    ]);

    $count = $user->rowCount();

    if($count > 0) {
        session_start();

        $_SESSION['user'] = $user->fetch();
        header("location:index.php");
    } else {
        header("location:login.php");
    }
}
?>


<body>
    <div>
        <form action="" method="POST">
            <div>
                <label for="">Username</label>
                <input type="username" name="username" required>
            </div>
            <br>
            <div>
                <label for="">Email</label>
                <input type="email" name="email" required>
            </div>
            <br>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" required>
            </div>
            <br>
            <div>
                <button type="submit" name="submit">Login</button>
            </div>
        </form>
        <div class="social-media">
            <img src="fb.jpeg" alt="Facebook">
            <img src="twt.jpeg" alt="Twitter">
            <img src="ig.jpeg" alt="Instagram">
        </div>
        <div style="height: 20px;"></div> <!-- Penambahan elemen untuk memberi jarak ke bawah -->
    </div>
    </div>
</body>
</html>