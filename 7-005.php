<?php
/*
staticメソッドをコールするときには、関数呼び出し
のほうがstaticプロパティ演算子よりも優先されます。
型推定の要領でコンパイラ側が検索してくれる
*/
class Foo
{
    static $variable = 'static property';
    static function Variable()
    {
        echo 'Method Variable called';
    }
}

echo Foo::$variable; // これは 'static property' を表示します。このスコープにおいて $variable が必要です。
$variable = "Variable";
Foo::$variable();  // これは $foo->Variable() をコールします。このスコープでの $variable の内容を読むからです。

?>