<?php
/*~ worxturing.php
.---------------------------------------------------------------------------.
|  Software: PHPMailer-FE (Form mailer Edition)                             |
|   Version: 3.2.4                                                          |
|   Contact: codeworxtech@users.sourceforge.net                             |
|      Info: http://phpmailer.worxware.com                                  |
| ------------------------------------------------------------------------- |
|    Author: Andy Prevost andy@worxteam.com (admin)                         |
| Copyright (c) 2002-2008, Andy Prevost. All Rights Reserved.               |
| ------------------------------------------------------------------------- |
|   License: Distributed under the Lesser General Public License (LGPL)     |
|            http://www.gnu.org/copyleft/lesser.html                        |
| This program is distributed in the hope that it will be useful - WITHOUT  |
| ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or     |
| FITNESS FOR A PARTICULAR PURPOSE.                                         |
| ------------------------------------------------------------------------- |
| We offer a number of paid services:                                       |
| - Web Hosting on highly optimized fast and secure servers                 |
| - Technology Consulting                                                   |
| - Oursourcing (highly qualified programmers and graphic designers)        |
'---------------------------------------------------------------------------'
Last updated: October 17 2009 00:45 EST
*/

$width     = 109; // (divisible by 6 and then add 1)
$height    = 30;
$font      = "worxturing.ttf";
$font_size = 19;
list($usec, $sec) = explode(" ", microtime());
srand((float)$usec + (float)$sec * 1000000);
$string = md5(rand(0,9999));
$code_string = strtoupper(substr($string, rand(0,26), 7));
session_start();
$_SESSION['WorxTuringTest'] = $code_string;
setcookie("WorxTuringTest", $code_string, time()+3600);  /* expire in 1 hour */
session_write_close();
$im = imagecreate($width, $height);
$background_color = imagecolorallocate($im, 255, 255, 255);
if (file_exists($font)) {
  $noise_color      = imagecolorallocate($im, 180, 180, 255);
  $line_color       = imagecolorallocate($im, 90, 145, 255);
  $text_color       = imagecolorallocate($im, 20, 20, 135);
} else {
  $noise_color      = imagecolorallocate($im, 220, 220, 255);
  $line_color       = imagecolorallocate($im, 150, 180, 255);
  $text_color       = imagecolorallocate($im, 20, 20, 135);
}
// generate random dots in background
for( $i=0; $i<($width*$height)/3; $i++ ) {
   imagefilledellipse($im, mt_rand(0,$width), mt_rand(0,$height), 1, 1, $noise_color);
}
// generate random lines in background
for( $i=0; $i<($width*$height)/150; $i++ ) {
   imageline($im, mt_rand(0,$width), mt_rand(0,$height), mt_rand(0,$width), mt_rand(0,$height), $line_color);
}
if (file_exists($font)) {
  $textbox = imagettfbbox($font_size, 0, $font, $code_string);
  $x = ($width - $textbox[4])/2;
  $y = ($height - $textbox[5])/2;
  imagettftext($im, $font_size, 0, $x, $y, $text_color, $font , $code_string);
} else {
  for ($i=0, $x=7; $i < strlen($code_string); $i++, $x+=10) {
    imagechar($im, 5, $x, 4, $code_string[$i], $text_color);
  }
}
header("Content-type: image/jpeg");
imagejpeg($im);
imagedestroy($im);

?>
