<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GMU E-Library | Register</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-color: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-container {
            background-color: #ffffff;
            width: 380px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .register-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #6b1f1f;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        .form-group input:focus {
            outline: none;
            border-color: #6b1f1f;
        }

        .register-btn {
            width: 100%;
            padding: 12px;
            background-color: #6b1f1f;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        .register-btn:hover {
            background-color: #541818;
        }

        .login-link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .login-link a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h2>Register</h2>
    <form>
        <div class="form-group">
            <label>Username</label>
            <input type="text" placeholder="Enter username" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" placeholder="Enter email" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="Enter password" required>
        </div>

        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" placeholder="Confirm password" required>
        </div>

        <button type="submit" class="register-btn">Register</button>
    </form>

    <div class="login-link">
        Already have an account? <a href="login.html">Login</a>
    </div>
</div>

</body>
</html>
