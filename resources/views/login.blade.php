<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(assets/background.png);
            background-color: black;
            background-position: center;
            background-size: cover;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px; /* Updated to allow responsiveness */
            text-align: center;
        }

        .logo-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo-container h2 {
            font-size: 20px;
        }

        .logo {
            max-width: 50px;
            max-height: 50px;
            margin-right: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            background-color: #0206fa;
            color: rgb(255, 255, 255);
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .register-link, .forgot-password-link {
            color: #3498db;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="logo-container">
        <img class="logo" src="assets/LOGO SEMEN PADANG.jpeg" alt="Company Logo">
        <h2>LOGIN</h2>
    </div>

    <form method="post" action="/login">
        @csrf
        <label for="nip">NIP:</label>
        <input type="text" id="nip" name="nip" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>

    <a class="register-link" href="{{route('registrasi')}}">Register Akun</a>
    <br>
    <a class="forgot-password-link" href="lupa password.html">Lupa Password?</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/popper.min.js"></script>
</body>
</html>
