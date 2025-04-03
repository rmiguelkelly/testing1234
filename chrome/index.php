<?php
  require_once('../util/config.php');
  Telemetry::log();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StateSmart - Your Trusted Insurance Finder</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #e30613;
            color: white;
            padding: 20px;
            text-align: center;
        }
        section {
            padding: 20px;
            max-width: 1000px;
            margin: auto;
        }
        h2 {
            color: #e30613;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            margin-bottom: 10px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e30613;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .pro-tip {
            background-color: #fff3cd;
            border-left: 5px solid #ffeeba;
            padding: 10px;
            margin: 20px 0;
        }
        footer {
            text-align: center;
            font-size: 0.9em;
            color: #777;
            padding: 20px;
        }
    </style>
</head>
<body>

<header>
    <h1>🛡️ StateSmart - Your Trusted Insurance Finder</h1>
    <p>Powered by Trust, Backed by Simplicity</p>
</header>

<section>
    <h2>🚗 Find Insurance You Can Count On</h2>
    <p><strong>StateSmart</strong> is your Chrome companion to explore and compare <strong>quality insurance rates</strong> quickly and securely. Just like State Farm, we prioritize <strong>reliability, privacy, and service</strong>.</p>

    <h2>🔐 Built with Privacy at Its Core</h2>
    <ul>
        <li>✅ No data selling</li>
        <li>✅ No tracking outside your search</li>
        <li>✅ Everything stays on your machine</li>
    </ul>

    <h2>🧰 Features You'll Love</h2>
    <ul>
        <li>📊 Instant Rate Comparisons</li>
        <li>🗱 Smart Suggestions for Top Insurers</li>
        <li>💬 Live Chat Support with Licensed Agents</li>
        <li>🔒 Secure, Local-Only Data Handling</li>
        <li>🌐 Lightweight and Fast</li>
    </ul>

    <h2>🚀 Get Started in 60 Seconds</h2>
    <p><strong>Installing an unpacked Chrome extension is easy:</strong></p>

    <ol>
        <li>Download the Extension Folder and unzip it.</li>
        <li>Open Chrome and navigate to <code>chrome://extensions</code>.</li>
        <li>Enable <strong>Developer Mode</strong> (top right corner).</li>
        <li>Click "Load unpacked".</li>
        <li>Select the folder containing <code>manifest.json</code>.</li>
        <li>You're done! 😊</li>
    </ol>

    <div class="pro-tip">
        <strong>💡 Pro Tip:</strong> Pin the extension by clicking the puzzle icon 🧬 and tapping the 🕽️ next to <strong>StateSmart</strong>.
    </div>

    <a href="statefarm.zip" class="button">Download StateSmart Extension</a>
</section>

<footer>

</footer>

</body>
</html>
