1.  <?php echo 'XHTMLまたはXMLドキュメントの中でPHPコードを扱いたい場合は、このタグを使いましょう'; ?>

2.  短い形式のechoタグを使って <?= 'この文字列を表示' ?> とすることも出来ます。
    これは <?php echo 'この文字列を表示' ?>と同じ意味になります。

3.  <?php
    echo "みなさん、こんにちは";

    //... いろんなコード

    echo "最後のごあいさつ";

    // PHP終了タグを書かずに、ここでスクリプトを終了
    //実行する場合は $ php (ファイル名)で結果を表示
    //参考:https://www.php.net/manual/ja/features.commandline.usage.php