<footer>
<?php
$startYear = 2006;
$thisYear = date('Y');
if ($startYear == $thisYear) {
 echo $startYear;
} else {
 echo "{$startYear}&ndash;{$thisYear}";
}
?>
 <p>&copy; 2006&ndash;<?php echo date('Y'); ?> Fannar.F.B</p>
 </footer>