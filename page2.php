<?php include 'title.php'; ?>
<!DOCTYPE html>

<html lang="utf-8">
<head>
<title>Japan Journey<?php echo "&#8212;{$title}"; ?></title>
<?php include 'random_image.php';
  ?>
 <link href="styles/journey.css" rel="stylesheet" type="text/css">
<?php if (isset($imageSize)) { ?>
<style>
body {background-color:Grey;
margin:20px;}


 figcaption {
 width: <?= $imageSize[0]; ?>px;
 }
 </style>
 <?php } ?>
</head>
<body>
<div class="menu">
<?php require 'menu.php';?>
</div>
</body>
<?php
echo "<h2>fooomofooom</h2>";
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>$txt1</h2>";
echo "Study PHP at $txt2<br>";
echo $x + $y;
?>
<?php if (isset($imageSize)) { ?>
 <figure>
 <img src="<?= $selectedImage; ?>" alt="Random image"
 <?= $imageSize[3]; ?>>
 <figcaption><?= $caption; ?></figcaption>
 </figure>
 <?php } ?>
</html>