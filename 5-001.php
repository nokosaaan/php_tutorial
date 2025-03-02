<?php
$a=4;
$b=3;
if ($a > $b)
  echo "aはbより大きい";
?>

<?php
if ($a > $b) {
  echo "aはbより大きい";
  $b = $a;
}
echo $b, "\n";
?>