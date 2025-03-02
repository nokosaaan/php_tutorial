<?php
/*
アロー関数は 無名関数 を簡潔に書ける文法として 
PHP 7.4 で追加されました。

無名関数とアロー関数は共に Closure クラスを
使って実装されています。

アロー関数は fn (argument_list) => expr という
形で記述します。

アロー関数は 無名関数 と同じ機能を
サポートしていますが、 親のスコープで使える変数が
常に自動で使える点だけが異なります。

式の中で使える変数が親のスコープで定義されている
場合、 暗黙のうちに参照ではなく値が
キャプチャされます。 次の例では、$fn1 と $fn2 
は同じ振る舞いをします。
*/
$y = 1;
 
$fn1 = fn($x) => $x + $y;
// $y を値渡しするのと同じ
$fn2 = function ($x) use ($y) {
    return $x + $y;
};

var_export($fn1(3)); //4
?>

<?php
//この仕組みは、アロー関数をネストした
//場合でも同じ動きをします:
$z = 1;
$fn = fn($x) => fn($y) => $x * $y + $z;
// 51 を出力
var_export($fn(5)(10));
echo "\n";
?>