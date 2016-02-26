<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<ul id="nav">
<li><a href="index.php" <?php if ($currentPage == 'index.php') { echo 'id="here"'; } ?>>Home</a> - </li>
<li><a href="page2.php" <?php if ($currentPage == 'index.php') { echo 'id="here"'; } ?>>Síða 2</a> - </li>
<li><a href="/page3.php" <?php if ($currentPage == 'index.php') { echo 'id="here"'; } ?>>CSS Tutorial</a> - </li>
<li><a href="contact.php" <?php if ($currentPage == 'index.php') { echo 'id="here"'; } ?>>Contact</a> - </li>
<li><a href="default.asp" <?php if ($currentPage == 'index.php') { echo 'id="here"'; } ?>>PHP Tutorial</a> </li>
