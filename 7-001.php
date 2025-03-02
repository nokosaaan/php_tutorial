<?php
/*
オプションの return 文により値を返すことが
できます。 配列やオブジェクトを含むあらゆる型を
返すことができます。 これにより、関数の実行を
任意の箇所で終了し、その関数を呼び出した 箇所に
制御を戻すことが出来ます。詳細に関しては return
を参照ください。
*/
function square($num)
{
    return $num * $num;
}
echo square(4);   //  '16'を出力
?>