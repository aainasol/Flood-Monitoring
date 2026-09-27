<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoRa Mode - IoT Flood Monitor</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>
<body>

<div class="mobile-container">
    <div class="app-header">
        <span>📡 LoRa Offline Mode</span>
        <span style="color: #f59e0b; font-size: 11px;">● Bypass WiFi</span>
    </div>

    <div class="app-content">
        <div class="card" style="background: #fffbeb; border: 1px solid #fde68a; text-align: center; padding: 20px; margin-bottom: 16px;">
            <div style="font-size: 32px; margin-bottom: 10px;">📶❌</div>
            <h4 style="color: #b45309; margin-bottom: 6px;">Internet Disconnected</h4>
            <p style="font-size: 12px; color: #92400e; font-weight: normal;">Local LoRa transceiver is active. Emergency alerts and beacon signals are transmitting securely without cloud internet.</p>
        </div>

        <div class="card" style="text-align: left;">
            <h4>Pending Sync Logs</h4>
            <p style="font-size: 13px; color: #334155; margin-top: 4px;">3 records waiting to sync back to database once internet connection is restored.</p>
        </div>
    </div>

    <!-- Bottom Navigation Bar -->
    <div class="bottom-nav">
        <a href="index.php" class="nav-item">
            <span class="icon"><i class="fa-solid fa-house"></i></span>
            <span>Home</span>
        </a>
        <a href="notifications.php" class="nav-item">
            <span class="icon"><i class="fa-regular fa-bell"></i></span>
            <span>Alerts</span>
        </a>
        <a href="camera.php" class="nav-item">
            <span class="icon"><i class="fa-solid fa-camera"></i></span>
            <span>Live Cam</span>
        </a>
        <a href="offline.php" class="nav-item active">
            <span class="icon"><i class="fa-solid fa-signal"></i></span>
            <span>LoRa Mode</span>
        </a>
    </div>
</div>

</body>
</html>