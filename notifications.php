<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alerts Center - IoT Flood Monitor</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>
<body>

<div class="mobile-container">
    <div class="app-header">
        <span>🔔 Notification Center</span>
        <span style="font-size: 11px; background: #e2e8f0; padding: 3px 8px; border-radius: 10px;">Logs</span>
    </div>

    <div class="app-content">
        <!-- Alert Item 1 -->
        <div class="card" style="text-align: left; margin-bottom: 12px; border-left: 4px solid #ef4444;">
            <div style="display: flex; justify-content: space-between; font-size: 11px; color: #64748b; margin-bottom: 4px;">
                <span>DANGER ALERT</span>
                <span>18:35 PM</span>
            </div>
            <div style="font-weight: bold; font-size: 13px; color: #1e293b;">Water level reached critical height!</div>
            <div style="font-size: 12px; color: #475569; margin-top: 4px;">SMS sent to administrator & buzzer triggered via LoRa.</div>
        </div>

        <!-- Alert Item 2 -->
        <div class="card" style="text-align: left; margin-bottom: 12px; border-left: 4px solid #f59e0b;">
            <div style="display: flex; justify-content: space-between; font-size: 11px; color: #64748b; margin-bottom: 4px;">
                <span>CAUTION WARNING</span>
                <span>17:10 PM</span>
            </div>
            <div style="font-weight: bold; font-size: 13px; color: #1e293b;">Heavy rain detected by Weather API.</div>
            <div style="font-size: 12px; color: #475569; margin-top: 4px;">System monitoring water accumulation rate.</div>
        </div>
    </div>

    <!-- Bottom Navigation Bar -->
    <div class="bottom-nav">
        <a href="index.php" class="nav-item">
            <span class="icon"><i class="fa-solid fa-house"></i></span>
            <span>Home</span>
        </a>
        <a href="notifications.php" class="nav-item active">
            <span class="icon"><i class="fa-regular fa-bell"></i></span>
            <span>Alerts</span>
        </a>
        <a href="camera.php" class="nav-item">
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