<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register | Solaris Exchange</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: #0e0e1a;
      color: #ffffff;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    header {
      background-color: #141421;
      padding: 1.5rem 2rem;
      text-align: center;
      border-bottom: 1px solid #222;
    }

    header h1 {
      font-size: 2rem;
      font-weight: 800;
      color: #ffffff;
    }

    .form-container {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 3rem 1rem;
    }

    .register-form {
      background-color: #1b1b2b;
      padding: 2.5rem;
      border-radius: 16px;
      max-width: 420px;
      width: 100%;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
    }

    .register-form h2 {
      font-size: 1.8rem;
      margin-bottom: 1.5rem;
      text-align: center;
      font-weight: 600;
    }

    .form-group {
      margin-bottom: 1.2rem;
    }

    label {
      display: block;
      font-size: 0.95rem;
      margin-bottom: 0.5rem;
      color: #bbb;
    }

    input {
      width: 100%;
      padding: 0.75rem 1rem;
      border-radius: 10px;
      border: none;
      font-size: 1rem;
      background-color: #26263a;
      color: #fff;
      outline: none;
      transition: box-shadow 0.2s ease;
    }

    input:focus {
      box-shadow: 0 0 0 2px #3b82f6;
    }

    .register-btn {
      width: 100%;
      margin-top: 1.5rem;
      padding: 0.9rem;
      font-size: 1rem;
      font-weight: 600;
      background-color: #3b82f6;
      color: #fff;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .register-btn:hover {
      background-color: #2563eb;
    }

    .login-link {
      margin-top: 1.2rem;
      font-size: 0.9rem;
      text-align: center;
      color: #aaa;
    }

    .login-link a {
      color: #3b82f6;
      text-decoration: none;
    }

    .login-link a:hover {
      text-decoration: underline;
    }

    footer {
      background-color: #0a0a14;
      text-align: center;
      padding: 2rem;
      font-size: 0.9rem;
      color: #666;
    }
  </style>
</head>
<body>

  <header>
    <h1>Solaris Exchange</h1>
  </header>

  <div class="form-container">
    <form class="register-form" action="upload.php" method="post">
      <h2>Create Account</h2>

      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required placeholder="John Doe">
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required placeholder="you@example.com">
      </div>

      <div class="form-group">
        <label for="name">Phone Number</label>
        <input type="text" id="phone" name="phone" required placeholder="(454) 111 - 9000">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required placeholder="••••••••">
      </div>

      <button type="submit" class="register-btn">Register</button>

      <div class="login-link">
        Already have an account? <a href="login.html">Sign in</a>
      </div>
    </form>
  </div>

  <footer>
    &copy; 2025 Solaris Exchange. Secure. Private. Compliant.
  </footer>

</body>
</html>
