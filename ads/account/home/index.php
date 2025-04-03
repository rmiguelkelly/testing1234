
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(to right, #fcd5ce, #a2d2ff);
            padding: 10px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 2rem;
            color: #7c3aed;
        }

        .welcome {
            text-align: center;
            font-size: 1rem;
            color: #4b5563;
            margin-bottom: 24px;
        }

        .list {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .channel {
            display: flex;
            align-items: center;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            padding: 12px 16px;
        }

        .channel img {
            width: 100px;
            height: 56px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 16px;
        }

        .channel-info {
            flex: 1;
        }

        .channel-info h2 {
            font-size: 1.125rem;
            color: #6b21a8;
            margin: 0 0 4px;
        }

        .channel-info p {
            margin: 0;
            color: #4b5563;
            font-size: 0.95rem;
        }

        .subscribe-btn {
            background-color: #10b981;
            color: #fff;
            border: none;
            padding: 8px 14px;
            border-radius: 8px;
            font-size: 0.85rem;
            cursor: pointer;
        }

        .subscribe-btn:hover {
            background-color: #059669;
        }

        .channel a {
            text-decoration: none;
            color: gray;
        }

        .withdraw {
            padding: 10px;
            display: flex;
            flex-direction: row;
            width: 100%;
            background-color: white;
            border-radius: 10px;
            margin-bottom: 20px;
            height: 60px;
            justify-content: space-between;
        }

        .withdraw a {
            display: block;
            text-decoration: none;
        }

        .withdraw .balance {
            display: block;
            text-decoration: none;
        }

        .balance-widget {
  background: linear-gradient(135deg, #e0f2fe, #bae6fd);
  padding: 25px 30px;
  border-radius: 16px;
  max-width: 350px;
  width: 100%;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  text-align: center;
  margin-bottom: 20px;
}

.balance-label {
  font-size: 18px;
  color: #0f172a;
  margin-bottom: 20px;
}

.withdraw-btn {
  background-color: #2563eb;
  color: white;
  text-decoration: none;
  padding: 12px 24px;
  border-radius: 8px;
  font-weight: 600;
  transition: background-color 0.3s ease;
  display: inline-block;
}

.withdraw-btn:hover {
  background-color: #1e40af;
}
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Your Dashboard</h1>
        </div>
        <div class="welcome">
            Hello Harry! Subscribe to these YouTube channels and earn rewards.
        </div>
        <div class="balance-widget">
            <div class="balance-label">
                <strong>Current Balance:</strong> $55.30
            </div>
            <a href="withdraw.php" class="withdraw-btn">Withdraw Funds</a>
        </div>
        <div class="list">
            <?php

            $channels = file_get_contents('channels.txt');

            $list = explode("\n", $channels);

            foreach ($list as $channel) {
                echo "<div class='channel'><a href='$channel'>$channel</a></div>";
            }

            ?>
        </div>
    </div>
</body>

</html>