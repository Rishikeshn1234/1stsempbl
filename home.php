<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GMU E-Library</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-color: #f4f6f8;
            color: #333;
        }

        header {
            background-color: #6b1f1f;
            color: #fff;
            padding: 30px 20px;
            text-align: center;
        }

        header img {
            width: 120px;
            margin-bottom: 15px;
        }

        nav {
            margin-top: 15px;
        }

        nav button {
            padding: 10px 18px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            background-color: #d4af37;
            color: #6b1f1f;
            font-size: 15px;
            cursor: pointer;
            font-weight: bold;
        }

        nav button:hover {
            background-color: #c19d2c;
        }

        main {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
        }

        .section {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .section h2 {
            margin-bottom: 12px;
            color: #6b1f1f;
        }

        .section p,
        .section ul,
        .section ol {
            line-height: 1.6;
            margin-left: 20px;
        }

        .actions {
            text-align: center;
        }

        .actions button {
            padding: 12px 22px;
            margin: 10px;
            border: none;
            border-radius: 6px;
            background-color: #3498db;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .actions button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<header>
    <!-- GM University Logo -->
    <img src="gmulogo.jpg" alt="GM University Logo">
    <h1>GMU E-Library</h1>
    <p>Your Digital Gateway to Knowledge</p>
    <nav>
        <a href="user/login.php">
    <button>Login</button>
    </a>

    <a href="user/register.php
    ">
    <button>Register</button>
    </a>

    </nav>
    </header>

    <main>
    <section class="section">
        <h2>About Our Library</h2>
        <p>
            GMU E-Library is a digital platform that provides students with easy access to
            academic books, question papers, and study materials anytime and anywhere.
            It supports learning through modern and efficient digital solutions.
        </p>
    </section>

    <section class="section">
        <h2>Features</h2>
        <ul>
            <li>Search for books and question papers</li>
            <li>View books and materials online</li>
            <li>Download study materials</li>
            <li>User-friendly interface</li>
            <li>Secure access for registered users</li>
        </ul>
    </section>

    <section class="section">
        <h2>Advantages of E-Library</h2>
        <ul>
            <li>24/7 access to learning resources</li>
            <li>Easy and quick searching</li>
            <li>Cost-effective and time-saving</li>
            <li>Environment friendly</li>
            <li>No physical storage required</li>
        </ul>
    </section>

    <section class="section">
        <h2>Members</h2>
        <ol>
            <li>Rishikesh N (HTML, CSS, JS, MySQL, PHP, JSON)</li>
            <li>Vinay M (HTML, CSS, JS)</li>
            <li>Manoj S G</li>
            <li>Pavan M Patil</li>
        </ol>
    </section>

    <div class="actions">
        <a href="https://gmu.ac.in/public/assets/downloadmaterial/News_Letter.pdf">
            <button>Read a Sample Book</button>
        </a>
    </div>
</main>

</body>
</html>
