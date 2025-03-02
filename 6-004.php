<?php
class DefaultCoffeeMaker {
    public function brew() {
        return 'Making coffee.';
    }
}
class FancyCoffeeMaker {
    public function brew() {
        return 'Crafting a beautiful coffee just for you.';
    }
}
function makecoffee($coffeeMaker = new DefaultCoffeeMaker)
{
    return $coffeeMaker->brew();
}
echo makecoffee(),"\n";
echo makecoffee(new FancyCoffeeMaker),"\n";

/*
デフォルト値は、定数式である必要があり、
 (例えば) 変数やクラスのメンバーであっては
 なりません。

デフォルト値を有する引数は、 デフォルト値がない
引数の右側に全てある必要があることに注意して下さい。 
そうでない場合、デフォルト値を指定していても、 
呼び出し時に省略できません。 
次の簡単なコードを見てみましょう。
*/
?>

<?php
function makeyogurt($container = "bowl", $flavour)
{
    return "Making a $container of $flavour yogurt.\n";
}
 
echo makeyogurt("raspberry"); 
// $container に "raspberry" を指定します。$flavour ではありません。
?>