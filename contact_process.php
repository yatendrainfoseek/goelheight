<?php
$to = "goelheight1@gmail.com";
$from = $_REQUEST['email'];
$name = $_REQUEST['name'];
$subject = "Contact Us Details From goelheight.com";
$number = $_REQUEST['phone'];
$message = $_REQUEST['message'];
$city = $_REQUEST['city'];
$Budget = $_REQUEST['Budget'];
$mail = "goelheight1@gmail.com";

$headers = "From: $mail";
$headers = "From: " . $mail . "\r\n";
$headers .= "Reply-To: " . $mail . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$logo = 'goelheights.com/img/logo.png';
$link = 'goelheights.com';

$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
$body .= "<table style='width: 100%;'>";
$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
$body .= "</td></tr></thead><tbody><tr>";
$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
$body .= "</tr><tr>";
$body .= "<td style='border:none;'><strong>City:</strong> {$city}</td>";
$body .= "<td style='border:none;'><strong>Budget:</strong> {$Budget}</td>";
$body .= "</tr><tr><td colspan='2' style='border:none;'> <strong>Phone:</strong>{$number}</td></tr>";
$body .= "<tr><td colspan='2' style='border:none;'> <strong>Message:</strong>{$message}</td></tr>";
$body .= "</tbody></table>";
$body .= "</body></html>";

$send = mail($to, $subject, $body, $headers);
$send = mail($from, "Thank You! Message From Goelheight", "'Thank You! $name Your submission is received and we will contact you soon'", $headers);
if ($send) {
    header("Location: http://goelheights.com/contact.php?sent=1");
} else {
    header("Location: http://goelheights.com/contact.php?sent=0");
}
