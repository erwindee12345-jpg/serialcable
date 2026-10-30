<?php
declare(strict_types=1);


$prefs = isset($_COOKIE['prefs']) && is_string($_COOKIE['prefs'])
    ? unserialize($_COOKIE['prefs'])
    : ['theme' => 'light'];

$theme = is_array($prefs) && is_string($prefs['theme'] ?? null) ? $prefs['theme'] : 'light';
header('Content-Type: text/plain; charset=utf-8');
echo 'Theme: ' . $theme . "\n";