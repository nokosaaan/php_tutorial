<?php
function foo() 
{
  function bar() 
  {
    echo "I don't exist until foo() is called.\n";
  }
}

/* ここでは関数bar()はまだ定義されていないので
   コールすることはできません。 */

foo();

/* foo()の実行によって bar()が
   定義されるためここではbar()を
   コールすることができます。*/

bar();
/*
PHP では、関数やクラスはすべてグローバルスコープ
にあります - 関数の内部で定義したものであっても
関数の外部からコールできますし、 その逆も可能です。

PHP は関数のオーバーロードをサポートしていません。
また、宣言された関数の定義を取り消したり再定義
することも できません。
*/
?>

<?php
function recursion($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursion($a + 1);
    }
}
recursion(3);
?>