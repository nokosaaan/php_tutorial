<?php
/*
foreach は、配列を反復処理するための便利な方法
です。 foreach が使えるのは配列とオブジェクト
だけであり、 別のデータ型や初期化前の変数に対して
使うとエラーになります。 この構造には二種類の
構文があります。
*/
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
// $arr は array(2, 4, 6, 8) となります
unset($value); // 最後の要素への参照を解除します
var_dump($arr);
print_r($arr);
?>

<?php
//配列定数の値を、参照によって
//反復処理させることもできます。
foreach (array(1, 2, 3, 4) as &$value) {
    $value = $value * 2;
    echo $value,"\n";
}
?>

<?php
/* foreach の例 1: 値のみ */

$a = array(1, 2, 3, 17);

foreach ($a as $v) {
    echo "Current value of \$a: $v.\n";
}

/* foreachの例2: 値 (説明用に、手動でアクセスする際の表記を出力) */

$a = array(1, 2, 3, 17);

$i = 0; /* 説明用 */

foreach ($a as $v) {
    echo "\$a[$i] => $v.\n";
    $i++;
}

/* foreachの例3: キーと値 */

$a = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
);

foreach ($a as $k => $v) {
    echo "\$a[$k] => $v.\n";
}

/* foreach の例4: 多次元配列 */
$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";

foreach ($a as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
}

/* foreach の例5: 動的配列 */

foreach (array(1, 2, 3, 4, 5) as $v) {
    echo "$v\n";
}
?>