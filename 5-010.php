<?php

function foo()
{
    global $color;

    include '5-008.php';

    echo "A $color $fruit";
}

/* 5-8.php は foo() のスコープを継承するため *
* $fruit はこの関数の外では無効となります。  *
* $color はglobalとして宣言されているため    *
* 有効です。                                 */

foo();                    // A green apple
echo "\n";
echo "A $color $fruit\n";   // A green

?>