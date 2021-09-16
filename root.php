<?php

ini_set('error_reporting', E_ALL ^ E_NOTICE);

session_set_cookie_params([
    'secure' => false, // we are on localhost
    'httponly' => true,
    'samesite' => 'Lax',
]);

session_start();

echo 'First-party frame';
echo '<br>';
echo 'Session: ' . $_SESSION['session'] ?? '';
echo '<br>';
echo 'Path: ' . $_SERVER['REQUEST_URI'];
echo '<br><br>';

if ($_SERVER['REQUEST_URI'] === '/') {
    if (!isset($_SESSION['session'])) {
        $_SESSION['session'] = 'root';
    }
?>
    <iframe src="http://ad:2002" title="3rd party ad content" width="600" height="200"></iframe>
    <br><br>
<?php
} else if ($_SERVER['REQUEST_URI'] === '/ad') {
    if (!isset($_SESSION['session'])) {
        $_SESSION['session'] = 'ad';
    }
}

echo 'Session: ' . $_SESSION['session'] ?? '';
