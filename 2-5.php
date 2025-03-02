<form action="foo.php" method="post">
    Name:  <input type="text" name="username" /><br />
    Email: <input type="text" name="email" /><br />
    <input type="submit" name="submit" value="Submit me!" />
</form>

<?php 
/*
フォームが PHP スクリプトに投稿された時、
フォームから渡された全て の変数は PHP により
自動的にスクリプトから使用可能となります。 
この情報にアクセスする手段は複数あります。
例を以下に示します。
*/
echo $_POST['username'];
echo $_REQUEST['username'];
/*
GETフォームを使用した場合も同じですが、
かわりに適当な定義済みの GET変数を使用するところ
が異なります。 GETは、QUERY_STRING 
(URLの'?'の後の情報)にも代入されます。 例えば、
 http://www.example.com/test.php?id=3には、 
 // $_GET['id']によりアクセス可能なGETデータ が
 // 含まれます。 $_REQUEST も参照ください。
 変数名のドットやスペースはアンダースコアに
 変換されます。 たとえば <input name="a.b" /> 
 は $_REQUEST["a_b"] となります。
*/
?>

<?php
/*
PHPではフォーム変数のコンテキスト内で配列が
使用可能です(FAQの関連箇所も参照ください)。
例えば、関連する変数をグループ化したり、
select inputで複数の値を 取得するといったことが
可能です。フォームを同じスクリプトに投稿し、 
投稿したデータを表示する例を示します。
*/
if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}
?>
<form action="" method="post">
    Name:  <input type="text" name="personal[name]" /><br />
    Email: <input type="text" name="personal[email]" /><br />
    Beer: <br />
    <select multiple name="beer[]">
        <option value="warthog">Warthog</option>
        <option value="guinness">Guinness</option>
        <option value="stuttgarter">Stuttgarter Schwabenbrau</option>
    </select><br />
    <input type="submit" value="submit me!" />
</form>
<?php
/*
PHP は、» RFC 6265 に定義されたHTTP Cookieを
完全にサポートします。Cookieは、リモート ブラウザ
にデータを保持し、再訪するユーザーを追跡し、
特定する機構 です。setcookie() 関数によりCookieを
セットす ることができます。Cookieは、HTTP ヘッダ
の一部なので、SetCookie 関数をブラウザに何かを
出力する前にコールする必要があります。 この制約は
、header() 関数のものと同じです。 Cookieのデータ
は、$_COOKIE のような適当なCookieデータ 配列で
参照可能です。また、 $_REQUESTでも 参照可能です。
詳細および例については、 setcookie()のマニュアル
ページを参照ください。

単一のCookieに複数の値を代入したい場合は、配列
として 代入することが可能です。以下に例を示します。
*/
setcookie("MyCookie[foo]", 'Testing 1', time()+3600);
setcookie("MyCookie[bar]", 'Testing 2', time()+3600);

/*
上記スクリプトにおいては、2つの異なるCookieを
生成されますが、 この場合、スクリプトでは 
MyCookie という単一の配列になります。 
一つのCookieに複数の値を設定したい場合、
最初の値に serialize()または explode()を
用いることを考えてください。 

Cookieは、パスまたはドメインが異ならない限り、 
以前のクッキーをブラウザ上の同じ名前の変数に
置き換えることに 注意してください。 さて、
買い物かご(Shopping Cart) プログラムの場合、
カウンタを保持し、 受け渡したいと思うかも
しれません。 これは、次のようになります。
*/
if (isset($_COOKIE['count'])) {
    $count = $_COOKIE['count'] + 1;
} else {
    $count = 1;
}
setcookie('count', $count, time()+3600);
setcookie("Cart[$count]", $item, time()+3600);
?>