<?php
/*
変数のスコープは、その変数が定義されたコンテキスト
です。 PHP には関数スコープとグローバルスコープ
があります。 関数の外部で定義されたあらゆる変数は、
グローバルスコープになります。 
ファイルが include された場合、 
そのファイルに含まれるコードは、 
include が行われた行の変数のスコープ
を引き継ぎます。 
*/
?>

<?php
$a = 1;

//include 'b.inc'; // 変数 $a は b.inc で利用できます。
?>

<?php
/*
名前付きの関数や 無名関数 の内部で作られた変数は、
関数の内部のスコープでのみ使えます。 しかし、
アロー関数 は親のスコープの変数を内部で
利用できるようにするために、 
変数をバインドします。 ファイルの include が
呼び出し側のファイルで発生した場合、 
呼び出されたファイルに含まれる変数は、 
関数を呼び出す内部で定義されたかのように
利用できます。
*/
$a = 1; // グローバルスコープ

function test()
{ 
    echo $a; // $a は、ローカルスコープの $a を参照しているので未定義です
} 
?>

<?php
/*
global キーワードは グローバルスコープの変数を
ローカルスコープにバインドするために使います。 
このキーワードは変数のリストや、単一の変数を
指定できます。 グローバル変数と同じ名前の変数を
参照するローカル変数が作られます。 
グローバル変数が存在しない場合、
グローバルスコープの変数が作られ、 
null が代入されます。
*/
$a = 1;
$b = 2;

function Sum() 
{
    global $a, $b;

    $b = $a + $b;
} 

Sum();
echo $b, "\n";
/*
関数の内部で $a、$b をグローバル宣言を行う
ことにより、両変数への参照は、グローバル変数 
の方を参照することになります。
ある関数により操作できるグローバル変数の数
は無制限です。
*/
?>

<?php
//現在 のカウントの追跡ができるように
//カウント関数を使用できるようにするためには、
//変数$aを static として宣言します。
function test2()
{
    static $a = 0;
    echo $a;
    $a++;
}
echo test2(), "\n";
echo test2(), "\n";

/* 
こうすると、$a は関数が最初にコールされた
ときにのみ初期化され、 test() 関数がコール
されるたびに $a の値を出力してその値を増加させます。
*/
?>

<?php
/*
static 変数は、再帰関数を実現する1つの手段
としても使用されます。 次の簡単な関数は、
中止す るタイミングを知るためにstatic変数
$countを用いて、 10 回まで再帰を行います。
*/
function test3()
{
    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10) {
        test3();
    }
    $count--; //10まで数え終わったのでデクリメント、0に戻す
    //echo $count;
}
echo test3(), "\n";
?>

<?php
/* 
PHP 8.3.0 より前のバージョンでは、 
static 変数には、定数式でのみ初期化できていました。
PHP 8.3.0 以降では、動的な式(例: 関数呼び出し) 
での初期化も許可されています。
*/
function foo(){
    static $int = 0;          // 正しい
    static $int = 1+2;        // 正しい
    //static $int = sqrt(121);  // PHP 8.3.0 以降は正しい

    $int++;
    echo $int;
}
echo foo(), "\n";
?>

<?php
/*
(オーバーライドされていない場合) 内部でstatic 
変数を使ったメソッドも継承されます。 PHP 8.1.0 
以降は、継承されたメソッドは、 親クラスのメソッド
とstatic 変数を共有するようになりました。 
つまり、メソッド内でのstatic 変数も、 static 
プロパティと同じ振る舞いになったということです。
*/
class Foo {
    public static function counter() {
        static $counter = 0;
        $counter++;
        return $counter;
    }
}
class Bar extends Foo {}
var_dump(Foo::counter()); // int(1)
var_dump(Foo::counter()); // int(2)
var_dump(Bar::counter()); // int(3), PHP 8.1.0 より前のバージョンでは int(1)
var_dump(Bar::counter()); // int(4), PHP 8.1.0 より前のバージョンでは int(2)
?>

<?php
/*
PHP は、 リファレンス 変数の修正子として 
static および global を実装しています。 
例えば、関数スコープ内にglobal 命令により実際に
インポートされた真のグローバル変数は、 実際に
グローバル変数へのリファレンスを作成します。 
これにより、以下の例が示すように予測できない動作
を引き起こす可能性 があります。
*/
function test_global_ref() {
    global $obj;
    $new = new stdClass;
    $obj = &$new;
}

function test_global_noref() {
    global $obj;
    $new = new stdClass;
    $obj = $new;
}

test_global_ref();
var_dump($obj);
test_global_noref();
var_dump($obj);
?>
