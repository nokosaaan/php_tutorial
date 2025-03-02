<?php
/* 例 1 */

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
//PHPは、forループ用に"コロン構文"
//もサポートします。 for loops.
?>

<?php
/*
 * データが入った配列で、ループ処理中に
 * その中身を書き換えたいと考えています
 */
$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);

$time_start = microtime(true); //実行開始時間を記録する
for($i = 0; $i < count($people); ++$i) {
    echo $people[$i]['salt'] = mt_rand(000000, 999999),"\n";
}
$time_end = microtime(true);
$time = $time_end - $time_start;
var_dump($time); //実行時間を出力する
/*
このコードは実行速度が遅くなることでしょう。 
というのも、配列のサイズを毎回取得しているからです
。 サイズが変わることはありえないのだから、これは
簡単に最適化することができます。 配列のサイズを
変数に格納して使うようにすれば、 何度も count() 
を呼ばずに済むのです。
*/

$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);
$time_start = microtime(true); //実行開始時間を記録する
for($i = 0, $size = count($people); $i < $size; ++$i) {
    echo $people[$i]['salt'] = mt_rand(000000, 999999),"\n";
}
$time_end = microtime(true);
$time = $time_end - $time_start;
var_dump($time); //実行時間を出力する,こっちの方が10倍速い
?>