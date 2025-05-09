<?php
session_start();

$code = rand(100000, 999999);
$_SESSION['captcha'] = $code;

header('Content-type: name/png');

$image = imagecreate(100, 30);
$background_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 5, 30, 8, $code, $text_color);

imagepng($image);
imagedestroy($image);
?>

	<div class="mb-3">
			<table>
			<tr>
			<td colspon="2"><centre><img src = "../images/captcha.php" alt = "Code de vérification"/></centre></td> 
			</tr>
			<tr>
			    <td> Merci de retaper le code de l'image ci-dessus </td> <td> <input type = "text" name = "verif_code"/></td>
			</tr>
			</table>
			</div>