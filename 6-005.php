<?php
//デフォルト付きの引数は右側に配置
function makeyogurt($flavour, $container = "bowl")
{
    return "Making a $container of $flavour yogurt.\n";
}
 
echo makeyogurt("raspberry"); // $flavour に "raspberry" を指定します。
?>