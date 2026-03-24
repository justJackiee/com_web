<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title']; ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/assets/css/style.css">
</head>
<body>
    <h1><?php echo $data['title']; ?></h1>
    <p><?php echo $data['description']; ?></p>

    <div class="note">
        <h2>System Status: MVC Framework Initialized</h2>
        <ul>
            <li>Core Router: <strong>Ready</strong></li>
            <li>Base Controller: <strong>Ready</strong></li>
            <li>Database Connection: <strong>Ready (Check config/config.php)</strong></li>
            <li>Base Model: <strong>Ready</strong></li>
        </ul>
    </div>
</body>
</html>
