<?php
//オブジェクトのメソッドを可変関数を使って
// コールすることもできます。
class Foo
{
    function Variable()
    {
        $name = 'Bar';
        $this->$name(); // Bar() メソッドのコール
    }
    
    function Bar()
    {
        echo "This is Bar";
    }
}

$foo = new Foo();
$funcname = "Variable";
$foo->$funcname();  // $foo->Variable() をコールする

?>