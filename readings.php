<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensor Readings - IoT Flood Monitor</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>
<body>

<div class="mobile-container">
    <div class="app-header">
        <a href="index.php" style="text-decoration:none; color:#1e293b; font-weight:bold;">&larr; Back</a>
        <span>Sensor Analytics</span>
        <span>📊</span>
    </div>

    <div class="app-content">
        <div style="font-weight: bold; margin-bottom: 10px; color: #1e293b;">Kg. Bukit Gemuroh - Trend Analysis</div>
        
        <!-- Simulated Chart Box -->
        <div class="card" style="margin-bottom: 16px; text-align: left;">
            <h4>Water Level Trend (Past 12 Hours)</h4>
            <div style="background: #1e293b; color: #38bdf8; padding: 20px; border-radius: 8px; text-align: center; margin-top: 10px; font-family: monospace;">
                [ ███ 0.42m ]<br>
                [ ██████ 0.85m ]<br>
                [ █████████ 1.20m (Rising) ]
            </div>
            <p style="font-size: 11px; color: #64748b; margin-top: 8px;">Rate of change: <strong>+0.02 m/h</strong></p>
        </div>

        <div class="sensor-grid">
            <div class="card">
                <h4>Temperature</h4>
                <p>28°C</p>
            </div>
            <div class="card">
                <h4>Battery Status</h4>
                <p style="color: #10b981;">85% (Good)</p>
            </div>
        </div>

        <div class="card" style="margin-top: 16px; text-align: left;">
            <h4>System Parameters</h4>
            <ul style="margin: 0; padding-left: 15px; font-size: 13px; color: #475569; line-height: 1.5;">
                <li>Ultrasonic Sensor: Active</li>
                <li>Rainfall Gauge: Active</li>
                <li>LoRa Frequency: 915 MHz</li>
            </ul>
        </div>
    </div>

    <!-- Bottom Navigation Bar -->
    <div class="bottom-nav">
        <a href="index.php" class="nav-item active">
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
        <a href="offline.php" class="nav-item">
            <span class="icon"><i class="fa-solid fa-signal"></i></span>
            <span>LoRa Mode</span>
        </a>
    </div>
</div>

</body>
</html>