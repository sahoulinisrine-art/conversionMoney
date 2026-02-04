
<?php
function is_connected(): bool {
    return isset($_SESSION['auth']);
}