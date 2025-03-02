<?php
/*
instanceof を使用して、 ある PHP 変数が特定の 
クラス のオブジェクトのインスタンスであるか
どうかを調べます。
*/
class MyClass
{
}

class NotMyClass
{
}
$a = new MyClass;

var_dump($a instanceof MyClass); //true
var_dump($a instanceof NotMyClass); //false
?>

<?php
/*
instanceof は、ある変数が 特定の親クラスを
継承(extends)したクラスのオブジェクトの
インスタンスであるかどうかを調べることもできます。
*/
class ParentClass
{
}

class MyClass2 extends ParentClass
{
}

$a = new MyClass2;

var_dump($a instanceof MyClass2); //true
var_dump($a instanceof ParentClass); //true
?>

<?php
//あるオブジェクトが特定のクラスのインスタンスで
//ない ことを調べるには、 論理 否定 演算子 
//を使用します。
class MyClass3
{
}

$a = new MyClass3;
var_dump(!($a instanceof stdClass)); //true
?>

<?php
/*
最後に、instanceof は、ある変数が特定の 
インターフェイス を実装したクラスのオブジェクト
のインスタンスであるかどうかも調べることができます。
*/
interface MyInterface
{
}

class MyClass4 implements MyInterface
{
}

$a = new MyClass4;

var_dump($a instanceof MyClass4); //true
var_dump($a instanceof MyInterface); //true
?>

<?php
/*
通常、instanceof ではリテラルのクラス名を
使用しますが、 別のオブジェクトや文字列変数を
使用することもできます。
つまり、クラス名と単なる文字列を同等に扱える
*/
interface MyInterface2
{
}

class MyClass5 implements MyInterface2
{
}

$a = new MyClass5;
$b = new MyClass5;
$c = 'MyClass5';
$d = 'NotMyClass';

var_dump($a instanceof $b); // $b MyClass5 クラスのオブジェクトです->true
var_dump($a instanceof $c); // $c は文字列 'MyClass5' です->true
var_dump($a instanceof $d); // $d は文字列 'NotMyClass' です->false
?>


<?php
/*
PHP 8.0.0 以降では、 instanceof は任意の式と
一緒に使えるようになりました。 式は文字列を
生成するもので、かつ括弧で囲む必要があります。
*/
class ClassA extends \stdClass {}
class ClassB extends \stdClass {}
class ClassC extends ClassB {}
class ClassD extends ClassA {}

function getSomeClass(): string
{
  return ClassA::class;
}

var_dump(new ClassA instanceof ('std' . 'Class')); //true
var_dump(new ClassB instanceof ('Class' . 'B')); //true
var_dump(new ClassC instanceof ('Class' . 'A')); //false
var_dump(new ClassD instanceof (getSomeClass())); //true
?>