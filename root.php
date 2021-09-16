<?php

session_set_cookie_params([
    'secure' => false, // we are on localhost
    'httponly' => true,
    'samesite' => 'Lax',
]);

session_start();

print_r($_SESSION);
echo '<br>';

echo $_SERVER['REQUEST_URI'] . PHP_EOL;
if ($_SERVER['REQUEST_URI'] === '/') {
    if (!isset($_SESSION['session'])) {
        $_SESSION['session'] = 'root';
    }
    ?>
<iframe
    src="http://ad:2002"
    title="3rd party ad content"
    name="" scrolling="no"
    marginwidth="0" marginheight="0"
    width="600" height="365"
    sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation">
</iframe>
<br>
<?php
} else if ($_SERVER['REQUEST_URI'] === '/ad') {
    $_SESSION['session'] = 'ad';
}

print_r($_SESSION);

?>
