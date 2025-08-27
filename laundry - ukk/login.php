<!DOCTYPE html>
<html lang="id">

<head>
    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/565/565722.png">
    <meta charset="UTF-8">
    <title>Login Laundry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #56CCF2, #2F80ED);
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: #fff;
            padding: 40px 35px;
            border-radius: 15px;
            box-shadow: 0px 8px 18px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #2F80ED;
        }

        .login-container img {
            width: 80px;
            margin-bottom: 15px;
        }

        .login-container label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            transition: 0.3s;
        }

        .login-container input:focus {
            border-color: #2F80ED;
            box-shadow: 0px 0px 6px rgba(47, 128, 237, 0.5);
        }

        .login-container button {
            width: 100%;
            padding: 12px;
            border: none;
            background: #2F80ED;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-container button:hover {
            background: #1B5DC9;
        }

        .footer {
            margin-top: 15px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <img src="https://cdn-icons-png.flaticon.com/512/2922/2922076.png" alt="Laundry Icon">
        <h2>Login Laundry</h2>
        <form method="post" action="proses_login.php">
            <label>Username:</label>
            <input type="text" name="username" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <div class="footer">
            © 2025 Laundry Management
        </div>
    </div>
</body>

</html>