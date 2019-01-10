<?php
$img_w = 100;
$img_h = 30;
$img = imagecreatetruecolor($img_w, $img_h);
$bg_color = imagecolorallocate($img, 0xcc, 0xcc, 0xcc);
imagefill($img, 0, 0, $bg_color);

$count = 4;
$charset = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ23456789';
$charset_len = strlen($charset) - 1;
$code = '';
for ($i = 0; $i < $count; ++ $i) {
    $code .= $charset[mt_rand(0, $charset_len)];
}
session_start();
$_SESSION['captcha'] = $code;
$fontSize = 16;
$fontStyle = 'C:/Windows/Fonts/simhei.ttf';
for ($i = 0; $i < $count; ++ $i) {
    $fontColor = imagecolorallocate($img, mt_rand(0, 100), mt_rand(0, 50), mt_rand(0, 255));
    imagettftext($img, $fontSize, rand(0, 20) - mt_rand(0, 25), $fontSize * $i +15, mt_rand($img_h / 2, $img_h), $fontColor, $fontStyle, $code[$i]);
}
for ($i = 0; $i < 300; ++ $i) {
    $color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
    imagesetpixel($img, mt_rand(0, $img_w), mt_rand(0, $img_h), $color);
}
for ($i = 0; $i < 8; ++ $i) {
    $color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
    imageline($img, rand(0, $img_w), 0, rand(0, $img_h * 5), $img_h, $color);
}

header('Content - Type:image/gif');
imagegif($img);
?>
