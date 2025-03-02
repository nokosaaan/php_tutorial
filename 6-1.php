<?php
/*
PHP では、関数は参照される前に定義されている必要
はありません。 ただし以下の二つの例のように、
条件付きで関数が 定義されるような場合を除きます。

次の二つの例のように、ある条件下でのみ関数が
定義される場合には、 その関数定義は関数が
コールされる前に 行われていなければなりません。
*/
$makefoo = true;

/* ここでは関数foo()はまだ定義されていないので
   コールすることはできません。
   しかし関数 bar()はコールできます。 */

bar();

if ($makefoo) {
  function foo()
  {
    echo "I don't exist until program execution reaches me.\n";
  }
}

/* ここでは $makefooがtrueと評価されているため 
   安全にfoo()をコールすることができます。 */

if ($makefoo) foo();

function bar() 
{
  echo "I exist immediately upon program start.\n";
}

?>