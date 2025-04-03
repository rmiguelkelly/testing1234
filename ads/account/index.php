<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background: linear-gradient(to right, #fcd5ce, #a2d2ff);
      padding: 40px;
    }
    .container {
      max-width: 500px;
      margin: 0 auto;
      background: #fff;
      border-radius: 16px;
      padding: 40px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    h1 {
      text-align: center;
      color: #7c3aed;
      margin-bottom: 24px;
    }
    form {
      display: flex;
      flex-direction: column;
    }
    label {
      margin-bottom: 8px;
      font-weight: 600;
      color: #374151;
    }
    input {
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #d1d5db;
      border-radius: 8px;
      font-size: 1rem;
    }
    button {
      background-color: #7c3aed;
      color: #fff;
      border: none;
      padding: 12px;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
    }
    button:hover {
      background-color: #6d28d9;
    }
    .note {
      text-align: center;
      margin-top: 16px;
      font-size: 0.9rem;
      color: #6b7280;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Create Your Account</h1>
    <form action="createaccount.php" method="POST">
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required onchange="didchange">

      <label for="confirm-password">Confirm Password</label>
      <input type="password" id="confirm-password" name="confirm-password" required onchange="didchange">

      <button type="submit">Sign Up</button>
    </form>
    <div class="note">
      Already have an account? <a href="#">Log in here</a>.
    </div>
  </div>
</body>
</html>
