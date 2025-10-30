<?
/*
    site-specific config
*/

$site_title = 'M-u-l-t-i-p-l-i-c-i-t-y';
$head = 'HUM 598';
$site = 'M-u-l-t-i-p-l-i-c-i-t-y';
$home = $head . ", " . $site;
$card_default = '/media/jpg/card-default.jpg';
$logo_src = '/media/jpg/logo.jpg';
$description = 'Hello, w-w-w-orld.';
$site_url = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http';
$site_url .= '://' . $_SERVER['SERVER_NAME'];
$og_locale = 'en_US';
?>
