<?php
/*
const キーワードか、 define() 関数を使うことで、
定数を宣言することが出来ます。 define() を
使えば任意の式を使って定数を定義できますが、 
const キーワードを使う場合には、 
次の段落で説明する制約があります。 
定数が一度定義されると、 
変更または未定義とすることはできません。

未定義の定数を使用した場合、Error がスローされます。

定数が設定されているかを確認するには、
defined() 関数を使って下さい。

定数は、前にドル記号($)を要しません。
定数は、定義することができ、変数のスコープ規則に関係なく、
あらゆる場所からアクセス可能です。
定数は一度設定されると再定義または未定義とすることはできません。
定数は、スカラー値と配列としてのみ評価可能です。
*/
define("CONSTANT", "Hello world.");
echo CONSTANT, "\n"; // "Hello world."を出力
//echo Constant; // エラーが発生: Undefined constant "Constant"
               // PHP 8.0.0 より前のバージョンでは、"Constant" を出力し、警告が発生
?>

<?php
// 単純なスカラー値
const CONSTANT = 'Hello World';

echo CONSTANT;

// スカラー式
const ANOTHER_CONST = CONSTANT.'; Goodbye World';
echo ANOTHER_CONST;

const ANIMALS = array('dog', 'cat', 'bird');
echo ANIMALS[1]; // 出力は "cat"

// 配列の定数
define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));
echo ANIMALS[1]; // 出力は "cat"
?>