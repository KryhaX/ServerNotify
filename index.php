<?php
$servers = 2; // Zmień tę liczbę, aby dostosować liczbę serwerów
$preset_message = "Preset 1: This message will be sent in xx minutes.";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send message to all servers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Send message to all servers</h1>

    <div class="preset-container">
        <label for="preset" class="preset-label">Choose a preset:</label>
        <select id="preset" class="preset-select" onchange="updateMessages()">
            <option value="Preset 1">Preset 1</option>
            <option value="Preset 2">Preset 2</option>
            <option value="Preset 3">Preset 3</option>
        </select>
    </div>

    <div class="container" data-servers="<?php echo $servers; ?>">
        <?php
        for ($i = 1; $i <= $servers; $i++) {
            echo '
            <div class="server-box">
                <div class="server-header">Server ' . $i . '</div>
                <div class="server-message">
                    <textarea>' . $preset_message . '</textarea>
                </div>
            </div>
            ';
        }
        ?>
    </div>

    <script src="script.js"></script>
</body>
</html>
