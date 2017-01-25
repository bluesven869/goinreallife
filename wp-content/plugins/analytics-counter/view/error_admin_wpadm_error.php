<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
$error = $_GET['error'];
$error = str_replace('_', ' ', $error);

echo '<div class="error"><p>'.__('The site reports', 'analytics-counter').' "'.$error.'"</p></div>';