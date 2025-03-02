<?php
/*
デフォルトで、関数の引数は値で渡されます。
(このため、関数の内部で 引数の値を変更しても
関数の外側では値は変化しません。)関数がその引数を
修正できるようにするには、その引数を
リファレンス渡しとする必要があり ます。

関数の引数を常にリファレンス渡しとしたい場合には、
関数定義において アンパサンド(&) を引数名の前に
付加することができます。
*/
function add_some_extra(&$string)
{
    $string .= 'and something extra.';
}
$str = 'This is a string, ';
add_some_extra($str);
echo $str,"\n";    // 出力は 'This is a string, and something extra.' となります
?>

<?php
/*
関数は、変数に代入する記法に似たやり方で、 
デフォルト値を引数に定義することができます。 
デフォルト値は引数が指定されなかった場合に
使われますが、 null を渡した場合はデフォルト値を
代入 しない ことに特に注意して下さい。
*/
function makecoffee($type = "cappuccino")
{
    return "Making a cup of $type.\n";
}
echo makecoffee();
echo makecoffee(null);
echo makecoffee("espresso");
?>