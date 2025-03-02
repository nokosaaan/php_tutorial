<?php
/*
$a + $b	結合	$a および $b を結合する。
$a == $b	同等	$a および $b のキー/値のペアが等しい場合に true。
$a === $b	同一	$a および $b のキー/値のペアが等しく、その並び順が等しく、 かつデータ型も等しい場合に true。
$a != $b	等しくない	$a が $b と等しくない場合に true。
$a <> $b	等しくない	$a が $b と等しくない場合に true。
$a !== $b	同一でない	$a が $b と同一でない場合に true。
+ 演算子は、右側の配列を左側の配列に追加したものを返します。 
両方の配列に存在するキーについては左側の配列の
要素が優先され、 右側の配列にあった同じキーの要素
は無視されます。
*/
$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

$c = $a + $b; // Union of $a and $b
echo "Union of \$a and \$b: \n";
var_dump($c);

$c = $b + $a; // Union of $b and $a
echo "Union of \$b and \$a: \n";
var_dump($c);

$a += $b; // Union of $a += $b is $a and $b
echo "Union of \$a += \$b: \n";
var_dump($a);
?>

<?php
//同じキーと値を保持している場合に、
//配列が等しいとみなされます。
$a = array("apple", "banana");
$b = array(1 => "banana", "0" => "apple");

var_dump($a == $b); // bool(true)
var_dump($a === $b); // bool(false)
?>