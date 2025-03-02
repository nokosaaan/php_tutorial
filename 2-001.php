<?php
/*
PHP における単一の式はそれぞれ、 その値に応じて、
以下の組み込み型のうちのひとつを持ちます:
null
bool
int
float (浮動小数点数)
string
array
object
callable
resource

PHP は、動的に型付けを行う言語です。 
これは、PHP が実行時に型を決定するため、 
デフォルトでは変数の型を指定する必要がない
ということです。 しかし、 型宣言 を使うことで、 
その一部に静的に型を指定することができます。

注意: ある式を強制的に他の型として評価させたい場合
、 型キャスト を使います。 
settype() 関数を変数に対して使うと、 
変数の型をその場で変換できます。

式の型と値を知りたい場合は、 
var_dump() 関数を使用してください。 
式 の型を知りたい場合は、 
get_debug_type() を使用してください。 
式がある型であるかどうかをチェックするには 
is_type 関数を代わりに使用してください。
*/
?>

<?php
$a_bool = true;   // bool
$a_str  = "foo";  // string
$a_str2 = 'foo';  // string
$an_int = 12;     // int

echo get_debug_type($a_bool), "\n";
echo get_debug_type($a_str), "\n";

// 数値であれば、4を足す
if (is_int($an_int)) {
    $an_int += 4;
}
var_dump($an_int);

// $a_bool が文字列であれば, それをprintする
if (is_string($a_bool)) {
    echo "String: $a_bool";
}

// $a_str が文字列であれば, それをprintする
if (is_string($a_str)) {
    echo "String: $a_str\n";
}
?>