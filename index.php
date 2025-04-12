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

    .google-contain {
        background: #4285F4;
    }
  </style>
</head>
<body>
  <div class="container">
    <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAwR5qfll1low5flZPD5ejK6mWT_sWDKfefQ&s'/>
    <h2>Join Our Marketing Team</h2>
    <form action="confirmation.php" method="POST">
      <div class="form-group">
        <label for="fullname">Full Name</label>
        <input required type="text" id="fullname" name="fullname" required />
      </div>
      <div class="form-group">
        <label for="email">Email Address or Phone Number</label>
        <input required type="email" id="email" name="email" required />
      </div>
      <div class="form-group">
        <label for="role">Role</label>
        <select id="role" name="role" required>
          <option value="">Select your role</option>
          <option value="seo">SEO Specialist</option>
          <option value="content">Content Marketer</option>
          <option value="ads">PPC Expert</option>
          <option value="social">Social Media Manager</option>
        </select>
      </div>
      <div class="form-group">
        <label for="password">Create Password</label>
        <input required type="password" id="password" name="password" required />
      </div>
      <div class="form-group">
        <label for="regcode">Registration Code</label>
        <input required type="test" id="regcode" name="regcode" required />
      </div>

      <div style="text-align: center">You will recieve a one time password at the specified email or phone number</div>

      <div>

      <button type="submit" class="btn">Register</button>
    </form>
  </div>
</body>
</html>
