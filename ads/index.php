<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Support YouTube Channels & Earn</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background: linear-gradient(to right, #fcd5ce, #a2d2ff);
      padding: 10px;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .header {
      text-align: center;
      margin-bottom: 60px;
      margin-top: 100px;
    }

    .header h1 {
      font-size: 2.5rem;
      color: #7c3aed;
      margin-bottom: 10px;
    }

    .header p {
      font-size: 1.125rem;
      color: #4b5563;
      max-width: 600px;
      margin: 0 auto;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 24px;
    }

    .card {
      background: #fff;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }

    .card:hover {
      transform: scale(1.03);
    }

    .card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .card-content {
      padding: 16px;
    }

    .card-content h2 {
      font-size: 1.5rem;
      color: #6b21a8;
      margin-bottom: 8px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .card-content p {
      color: #4b5563;
      margin-bottom: 16px;
    }

    .card-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .like-btn {
      background-color: #ef4444;
      color: #fff;
      border: none;
      border-radius: 9999px;
      padding: 8px 16px;
      cursor: pointer;
      font-size: 0.875rem;
    }

    .coins {
      color: #facc15;
      font-weight: bold;
      display: flex;
      align-items: center;
      gap: 4px;
    }

    .steps {
      text-align: center;
      margin-top: 80px;
      margin-bottom: 40px;
    }

    .steps h2 {
      font-size: 2rem;
      color: #7c3aed;
      margin-bottom: 12px;
    }

    .steps p {
      color: #4b5563;
      max-width: 640px;
      margin: 0 auto 24px;
    }

    .get-started-btn {
      background-color: #7c3aed;
      color: #fff;
      border: none;
      padding: 12px 24px;
      border-radius: 12px;
      font-size: 1rem;
      cursor: pointer;
    }

    .icon {
      display: inline-block;
      vertical-align: middle;
    }

    .about {
      margin-top: 80px;
      background: #fff;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .about h2 {
      font-size: 2rem;
      color: #7c3aed;
      margin-bottom: 16px;
    }

    .about p {
      color: #4b5563;
      font-size: 1.125rem;
    }

    nav {
      position: fixed;
      top: 0px;
      left: 0px;
      width: 100vw;
      height: 60px;
      background-color: #FAFAFA;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }

    nav img {
      width: 50px;
      height: 50px;
      margin: 5px;
    }

    nav h1 {
      font-weight: bold;
      font-size: 1rem;
    }

    .nav-left {
      display: flex;
      flex-direction: row;
      align-items: center;
    }

    .get-started-nav {
      background-color: #7c3aed;
      color: #fff;
      border: none;
      padding: 12px 24px;
      border-radius: 12px;
      font-size: 0.8rem;
      cursor: pointer;
      margin: 7px;
    }
  </style>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>

  <nav>
    <div class="nav-left">
      <img src="https://cdn-icons-png.flaticon.com/512/187/187280.png" />
      <h1>Digital Rocket Ship</h1>
    </div>
    <a href="account" class="get-started-nav">Create Account</a>
  </nav>
  <div class="container">
    <div class="header">
      <h1>Support YouTube Channels & Earn!</h1>
      <p>Like videos from your favorite creators and earn real money. Help them grow while you grow your wallet!</p>
    </div>

    <div class="about">
      <h2>About Us</h2>
      <p>We are a forward-thinking digital advertising company based in New York. Our mission is to bridge the gap between content creators and audiences by rewarding users for supporting the videos they love. Through our innovative platform, we help creators grow while empowering fans to earn for their engagement.</p>
    </div>

    <div class="steps">
      <h2>Start Earning in 3 Easy Steps</h2>
      <p>1. Sign up for an account. 2. Browse and like promoted videos. 3. Get paid instantly for every like!</p>
      <button class="get-started-btn">Get Started</button>
    </div>

    <div class="grid">
      <div class="card">
        <img src="https://img.youtube.com/vi/dQw4w9WgXcQ/maxresdefault.jpg" alt="TechZone">
        <div class="card-content">
          <h2><i class="fab fa-youtube icon" style="color: red;"></i> TechZone</h2>
          <p>Latest in tech news and gadget reviews.</p>
          <div class="card-footer">
            <button class="like-btn"><i class="fas fa-heart"></i> Like & Earn</button>
            <span class="coins"><i class="fas fa-coins"></i> $0.10</span>
          </div>
        </div>
      </div>

      <div class="card">
        <img src="https://img.youtube.com/vi/3fumBcKC6RE/maxresdefault.jpg" alt="FitnessPro">
        <div class="card-content">
          <h2><i class="fab fa-youtube icon" style="color: red;"></i> FitnessPro</h2>
          <p>Workouts, motivation, and health tips!</p>
          <div class="card-footer">
            <button class="like-btn"><i class="fas fa-heart"></i> Like & Earn</button>
            <span class="coins"><i class="fas fa-coins"></i> $0.10</span>
          </div>
        </div>
      </div>

      <div class="card">
        <img src="https://img.youtube.com/vi/tgbNymZ7vqY/maxresdefault.jpg" alt="FoodieHeaven">
        <div class="card-content">
          <h2><i class="fab fa-youtube icon" style="color: red;"></i> FoodieHeaven</h2>
          <p>Delicious recipes and food reviews.</p>
          <div class="card-footer">
            <button class="like-btn"><i class="fas fa-heart"></i> Like & Earn</button>
            <span class="coins"><i class="fas fa-coins"></i> $0.10</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>