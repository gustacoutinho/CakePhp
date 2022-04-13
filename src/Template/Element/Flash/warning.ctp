<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message error" style="background-color: blue" onclick="this.classList.add('hidden');"><?= $message ?></div>
