<?php
 $images = [
 ['file'	=>	'myndir/foss.jpg',
  'caption' =>	'Hraunfossar'],
 ['file'	=>	'myndir/hraun.jpg',
 'caption'	=>	'Rauðhólar'],
 ['file'	=>	'myndir/ljos.jpg',
 'caption'	=>	'Norðurljós yfir Esju'],
 ['file'	=>	'myndir/stytta.jpg',
 'caption'	=>	'Stytta hjá Perlunni'],
 ['file'	=>	'myndir/bill.jpg',
 'caption'	=>	'Civic']
 ];
$i = rand(0, count($images)-1);
 $selectedImage = "{$images[$i]['file']}";
 $caption = $images[$i]['caption'];
 if (file_exists($selectedImage) && is_readable($selectedImage)) {
 $imageSize = getimagesize($selectedImage);
 }