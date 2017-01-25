<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$error = $_GET['google_oauth2_error'];
$error = str_replace('_', ' ', $error);

echo '<div class="error"><p>'.__('Google Analytics service reports', 'analytics-counter').' "'.$error.'"</p></div>';