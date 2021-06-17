<?php defined('BASEPATH') or exit('No direct script access allowed');

// Add custom values by settings them to the $config array.
// Example: $config['smtp_host'] = 'smtp.gmail.com';
// @link https://codeigniter.com/user_guide/libraries/email.html

$config['useragent'] = 'Easy!Appointments';
$config['protocol'] = getenv('MAIL_PROTOCOL') ?? 'mail'; // 'mail' or 'smtp'
$config['mailtype'] = getenv('MAIL_TYPE') ?? 'html'; // 'html' or 'text'

$config['smtp_debug'] = getenv('SMTP_DEBUG') ??'0'; // or '1'
if (getenv('SMTP_AUTH') !== null) {
    $config['smtp_auth'] = filter_var(getenv('SMTP_AUTH'), FILTER_VALIDATE_BOOLEAN);
} else {
    $config['smtp_auth'] = FALSE;
}

$config['smtp_host'] = getenv('SMTP_HOST') ?? '';
$config['smtp_user'] = getenv('SMTP_USER') ?? '';
$config['smtp_pass'] = getenv('SMTP_PASS') ?? '';
$config['smtp_crypto'] = getenv('SMTP_CRYPTO') ?? FALSE; // 'ssl' or 'tls'
$config['smtp_port'] = getenv('SMTP_PORT') ?? 25;
