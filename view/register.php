<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #e2e2e2, #c9d6ff);
            font-family: 'Nunito', sans-serif;
            /* Menambahkan font-family Nunito */
        }

        .register-container {
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .logo {
            display: block;
            margin: 0 auto 1rem;
            width: 160px;
        }

        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .btn-custom {
            background-color: #09052C;
            color: #FFFFFF;
        }

        .btn-custom:hover {
            background-color: #070423;
            color: #FFFFFF;
        }

        /* Menambahkan warna teks abu-abu untuk tombol */
        .btn-custom-grey {
            color: #808080;
            font-family: 'Nunito', sans-serif;
            /* Menambahkan font-family Nunito */
        }
        
    </style>
</head>

<body>
    <div class="register-container">
        <img src="view/content/content/careunity.png" alt="Logo" class="logo">
        <h2><strong>Register</strong></h2>
        <?php if (isset($error)) 
        echo "<p class='text-danger'>$error</p>"; ?>
        <form action="?c=Post&m=register_process" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-custom btn-block btn-custom-grey">Register</button>
            <a href="index.php?c=Post&m=login_form" class="btn btn-custom btn-block btn-custom-grey">Login</a>
        </form>
    </div>
</body>

</html>