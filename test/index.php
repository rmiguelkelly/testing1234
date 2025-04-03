<?php
$values = [
  'date' => date('Y-m-d H:i:s'),
  'ip' => $_SERVER['REMOTE_ADDR'],
  'path' => $_SERVER['REQUEST_URI'],
  'user-agent' => $_SERVER['HTTP_USER_AGENT']
];

$ip_name = $_SERVER['REMOTE_ADDR'];

if ($ip_name == "::1") {
  $ip_name = "localhost";
}

file_put_contents(urlencode($ip_name) . '.log', json_encode($values) . PHP_EOL, FILE_APPEND);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Solaris Exchange - Privacy. Compliance. Power.</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: #0e0e1a;
      color: #fff;
      line-height: 1.6;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    header {
      position: relative;
      z-index: 2;
      background-color: rgba(20, 20, 33, 0.85);
      padding: 1.5rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #222;
    }

    header h1 {
      font-size: 1.8rem;
      font-weight: 800;
      color: #ffffff;
    }

    nav a {
      margin-left: 1.5rem;
      font-weight: 600;
      color: #bbb;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #3b82f6;
    }

    .hero {
      position: relative;
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 0 1rem;
      overflow: hidden;
    }

    .hero video {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      min-height: 100%;
      object-fit: cover;
      z-index: 0;
    }

    .hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      color: #fff;
      max-width: 800px;
    }

    .hero-content h2 {
      font-size: 2.5rem;
      font-weight: 800;
      margin-bottom: 1rem;
    }

    .hero-content p {
      font-size: 1.1rem;
      color: #ccc;
      margin-bottom: 2rem;
    }

    .cta-btn {
      padding: 0.9rem 2rem;
      font-size: 1rem;
      font-weight: 600;
      background-color: #3b82f6;
      color: white;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .cta-btn:hover {
      background-color: #2563eb;
    }

    .features {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      padding: 4rem 2rem;
      background-color: #1b1b2b;
    }

    .feature {
      background-color: #26263a;
      padding: 2rem;
      border-radius: 16px;
      text-align: center;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .feature img {
      width: 60px;
      margin-bottom: 1rem;
    }

    .feature h3 {
      font-size: 1.2rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .feature p {
      font-size: 0.95rem;
      color: #aaa;
    }

    .about {
      padding: 4rem 2rem;
      background-color: #141421;
      text-align: center;
    }

    .about h2 {
      font-size: 2rem;
      margin-bottom: 1rem;
      font-weight: 700;
    }

    .about p {
      max-width: 700px;
      margin: 0 auto;
      font-size: 1rem;
      color: #ccc;
    }

    footer {
      background-color: #0a0a14;
      text-align: center;
      padding: 2rem;
      font-size: 0.9rem;
      color: #666;
    }

    @media (max-width: 600px) {
      .hero-content h2 {
        font-size: 2rem;
      }

      .hero-content p {
        font-size: 1rem;
      }

      header {
        flex-direction: column;
        text-align: center;
      }

      nav {
        margin-top: 1rem;
      }
    }
  </style>
</head>

<body>

  <header>
    <h1>Solaris</h1>
    <nav>
      <a href="register.php">Register</a>
      <a href="kyc.php">KYC</a>
      <a href="account.html">Account</a>
      <a href="send.html">Send BTC</a>
    </nav>
  </header>

  <section class="hero">
    <video autoplay muted loop playsinline>
      <source src="video.mp4" type="video/mp4">
    </video>
    <div class="hero-content">
      <h2>Secure & Compliant Crypto Trading</h2>
      <p>Solaris is the future of cryptocurrency exchanges. Blazing fast trades. Government-grade compliance. Rock-solid privacy.</p>
      <a href="register.php"><button class="cta-btn">Get Started</button></a>
    </div>
  </section>

  <section class="security" style="padding: 4rem 2rem; background-color: #1b1b2b; text-align: center;">
    <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 1rem;">Security You Can Trust</h2>
    <p style="max-width: 700px; margin: 0 auto; font-size: 1rem; color: #ccc;">
      At Solaris, security is not an afterthought — it’s our foundation. We employ industry-leading multi-layer encryption, cold wallet asset protection, 24/7 monitoring, and real-time fraud detection to ensure your funds are always safe. Every transaction is authenticated with advanced 2FA and biometric options where available.
    </p>
  </section>

  <section class="features">
    <div class="feature">
      <img src="https://img.icons8.com/color/60/bitcoin--v1.png" alt="Security">
      <h3>Military-grade Security</h3>
      <p>Your assets are protected with cutting-edge encryption and cold wallet storage.</p>
    </div>
    <div class="feature">
      <img src="https://img.icons8.com/color/60/bitcoin--v1.png" alt="Compliance">
      <h3>Fully Compliant</h3>
      <p>KYC and AML enforcement ensures we meet all global regulations without compromise.</p>
    </div>
    <div class="feature">
      <img src="https://img.icons8.com/color/60/bitcoin--v1.png" alt="Speed">
      <h3>Lightning Fast</h3>
      <p>Execute trades in milliseconds and move your crypto instantly with minimal fees.</p>
    </div>
  </section>

  <section class="trust" style="padding: 4rem 2rem; background-color: #141421; text-align: center;">
    <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 1rem;">Trusted by Millions</h2>
    <p style="max-width: 700px; margin: 0 auto; font-size: 1rem; color: #ccc;">
      Join the growing community of over <strong>12 million global users</strong> who trust Solaris to invest, trade, and grow their crypto portfolios. Whether you’re a beginner or a seasoned trader, our powerful platform, transparent policies, and dedicated support team provide the peace of mind you need to thrive in the world of digital finance.
    </p>
  </section>


  <section class="about">
    <h2>Why Solaris?</h2>
    <p>
      At Solaris, we believe in a world where crypto is both private and accountable. Our platform is designed for traders who demand performance, but also value security and regulatory peace of mind. We combine powerful technology with an intuitive interface that works seamlessly on any device.
    </p>
  </section>

  <footer>
    &copy; 2025 Solaris Exchange. All rights reserved.
  </footer>

</body>

</html>