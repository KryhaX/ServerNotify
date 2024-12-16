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
