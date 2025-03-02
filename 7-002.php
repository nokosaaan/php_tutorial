<?php
/*
関数は複数の値を返すことは出来ませんが、 配列を
返すことで似たような結果を得ることができます。
*/
function small_numbers()
{
    return [0, 1, 2];
}
// 配列を展開させると、配列のそれぞれのメンバが個別に得られます。
[$zero, $one, $two] = small_numbers();

echo $zero,"\n",$one,"\n",$two,"\n";

// PHP 7.1.0 より前のバージョンで上と同じことをするには、
// 言語構造 list を使うしかありません。
list($zero, $one, $two) = small_numbers();

?>