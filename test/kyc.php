<?php

$uploadStatus = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetDir = "uploads/";
    $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];

    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $file = $_FILES['id_image'];

    if ($file['error'] === 0 && in_array($file['type'], $allowedTypes)) {
        $filename = basename($file["name"]);
        $targetFile = $targetDir . time() . "_" . $filename;

        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            $uploadStatus = "✅ Your ID has been uploaded successfully.";
        } else {
            $uploadStatus = "❌ Error uploading your file.";
        }
    } else {
        $uploadStatus = "❌ Invalid file type. Only JPG and PNG are allowed.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KYC Verification | Solaris Exchange</title>
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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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
        }

        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .kyc-box {
            background-color: #1b1b2b;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
            max-width: 500px;
            width: 100%;
        }

        .kyc-box h2 {
            font-size: 1.6rem;
            font-weight: 600;
            margin-bottom: 1.2rem;
            text-align: center;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            font-size: 0.95rem;
            color: #bbb;
            margin-bottom: 0.5rem;
        }

        input[type="file"] {
            background-color: #26263a;
            color: #ccc;
            border: none;
            padding: 0.8rem;
            border-radius: 10px;
            width: 100%;
        }

        .submit-btn {
            background-color: #3b82f6;
            color: #fff;
            font-weight: 600;
            font-size: 1rem;
            padding: 0.9rem;
            width: 100%;
            border: none;
            border-radius: 10px;
            margin-top: 1.5rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #2563eb;
        }

        .upload-status {
            margin-top: 1rem;
            text-align: center;
            font-size: 0.95rem;
            color: #88f788;
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

    <div class="container">
        <div class="kyc-box">
            <h2>KYC Verification</h2>
            <form action="kyc.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="id_image">Upload Photo ID such as drivers license or passport</label>
                    <input type="file" id="id_image" name="id_image" accept="image/jpeg, image/png" required>
                </div>
                <button type="submit" class="submit-btn">Submit ID</button>
                <?php if ($uploadStatus): ?>
                    <div class="upload-status"><?= htmlspecialchars($uploadStatus) ?></div>
                <?php endif; ?>
            </form>
        </div>
    </div>

    <footer>
        &copy; 2025 Solaris Exchange. Secure. Private. Compliant.
    </footer>

</body>

</html>