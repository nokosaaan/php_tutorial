<?php
$a=6;
$b=2;
if ($a > $b) {
    echo "aはbより大きい\n";
} elseif ($a == $b) {
    echo "aはbと等しい\n";
} else {
    echo "aはbより小さい\n";
}
?>

<?php
//別の構文,pythonに近い
if ($a == 5):
    echo "aは5に等しい";
    echo "...\n";
elseif ($a == 6):
    echo "aは6に等しい";
    echo "!!!\n";
else:
    echo "aは5でも6でもない\n";
endif;
?>