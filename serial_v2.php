<?php
declare(strict_types=1);


$prefs = null;
if (isset($_COOKIE['prefs']) && is_string($_COOKIE['prefs'])) {
    $decoded = json_decode($_COOKIE['prefs'], true, 4);
    $prefs = is_array($decoded) ? $decoded : null;
}

$theme = is_array($prefs) && is_string($prefs['theme'] ?? null) ? $prefs['theme'] : 'light';
header('Content-Type: text/plain; charset=utf-8');
echo 'Theme: ' . htmlspecialchars($theme, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . "\n";