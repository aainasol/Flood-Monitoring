<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Camera - IoT Flood Monitor</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<div class="mobile-container">
    <div class="app-header">
        <span>📍 Kg. Bukit Gemuroh</span>
        <span style="color: #ef4444; font-size: 11px; font-weight: bold;">● REC / LIVE</span>
    </div>

    <div class="app-content">
        <div style="font-size: 12px; color: #64748b; margin-bottom: 8px;">Visual Evidence from ESP32-CAM</div>
        
        <div class="camera-box" style="margin-bottom: 16px;">
            <div style="padding: 6px; background: rgba(0,0,0,0.7); font-size: 11px; position: absolute; top: 0; width: 100%;">TIMESTAMP: 2026-09-27 18:50:12</div>
            <img src="https://images.unsplash.com/photo-1518837695005-2083093ee35b?w=400" alt="River Live Stream">
        </div>

        <div class="card" style="text-align: left; margin-bottom: 16px;">
            <h4 style="margin-bottom: 4px;">Camera Location Details</h4>
            <p style="font-size: 13px; color: #334155; font-weight: normal;">Main River Bridge, Sector B, Kg. Bukit Gemuroh</p>
        </div>

        <a href="camera.php" class="btn-primary" style="background-color: #0f172a; text-align: center;">Refresh Snapshot</a>
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
        <a href="camera.php" class="nav-item active">
            <span class="icon"><i class="fa-solid fa-camera"></i></span>
            <span>Live Cam</span>
        </a>
        <a href="offline.php" class="nav-item">
            <span class="icon"><i class="fa-solid fa-signal"></i></span>
            <span>LoRa Mode</span>
        </a>
    </div>
</div>

</body>
</html>