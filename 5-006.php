<?php
/*
match 式は、値の一致をチェックした結果に基づいて
評価結果を分岐します。 switch 文と似ていますが、
match 式は複数の候補と比較される制約式を持ちます。
switch 文とは異なり、 三項演算子のように値を
評価します。 switch 文とは異なり、 
弱い比較(==)ではなく、 型と値の一致チェック(===) 
に基づいて行われます。 match 式は PHP 8.0.0 以降
で利用可能です。
*/
$food = 'cake';

$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',
};

var_dump($return_value);

$age = 18;

$output = match (true) {
    $age < 2 => "Baby",
    $age < 13 => "Child",
    $age <= 19 => "Teenager",
    $age > 19 => "Young adult",
    $age >= 40 => "Old adult"
};

var_dump($output);

/*
match 式の比較は、 switch 文が行う弱い比較ではなく、 
                  厳密に値を比較(===) します。
match 式は値を返します。
match 式の分岐は、 switch 文のように後の分岐に
      抜けたりはしません。
match 式は、全ての場合を網羅していなければ
      いけません。
*/
?>

<?php

$text = 'Bienvenue chez nous';

$result = match (true) {
    str_contains($text, 'Welcome') || str_contains($text, 'Hello') => 'en',
    str_contains($text, 'Bienvenue') || str_contains($text, 'Bonjour') => 'fr',
    // ...
};

var_dump($result);
?>