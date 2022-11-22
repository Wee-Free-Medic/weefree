<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/plugins/php/vendor/autoload.php');
$ini = parse_ini_file('{{ .Site.Params.phpConfig }}', true);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
?>
