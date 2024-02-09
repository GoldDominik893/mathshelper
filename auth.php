<?php
// Change These 3
$username = "43";
$password = "34";
$redir_location = "//google.com";

$postuser = $_POST['user'] ?? "";
$postpass = $_POST['pass'] ?? "";
if ($postuser == $username and $postpass == $password) {
    header('Location: '. $redir_location);
    exit(0);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Maths Super Star</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: rgb(234,234,255);
            background: linear-gradient(45deg, rgba(234,234,255,1) 0%, rgba(198,245,255,1) 100%);
            color: black;
        }

        header {
            background: rgb(69,65,147);
            background: linear-gradient(90deg, rgba(69,65,147,1) 0%, rgba(0,212,255,1) 100%);
            color: white;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .login-container {
            margin: 50px auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff6;
            border-radius: 5px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .login-container label {
            display: block;
            margin-bottom: 10px;
            text-align: left;
        }

        .login-container input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .login-container button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        h1, h2, h3, h4, h5, h6 {
            margin: 0px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
        }

    </style>
</head>

<body>
    <header>
    <h1 style="padding-left: 20px;">Maths Super Star! Login</h1>
    </header>

        <div class="login-container">
            <form action="auth.php" method="post">
                <label for="user">Username:</label>
                <input type="text" id="user" name="user" required>

                <label for="pass">Password:</label>
                <input type="password" id="pass" name="pass" required>

                <button type="submit">Login</button>
            </form>
        </div>


        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
        <br>
        <p>* Statements may be fictional.<br>'Maths Super Star' is not a registered trademark, rights not reserved.</p>
        <br>
    </footer>
</body>
</html>
