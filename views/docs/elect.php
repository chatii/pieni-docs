<h1>エレクト</h1>

<p>
Loadライブラリは内部でエレクトを使用しています。<br>
コントローラで次の処理<code>$this->load->view('template');</code>が行われたとき、検索されるビューの例を示します。<br>
(パッケージリスト:[APPPATH, BASEPATH], 言語:'ja', アクター:'g', ターゲット:'docs'のとき)<br>
上位から順に検索され、ファイルが存在すればそのファイルがロードされます。<br>
</p>
<pre class="card">
Array
(
    [0] => ... application/views/ja/g/docs/template.php
    [1] => ... application/views/ja/g//template.php
    [2] => ... application/views/ja//docs/template.php
    [3] => ... application/views/ja///template.php
    [4] => ... application/views//g/docs/template.php
    [5] => ... application/views//g//template.php
    [6] => ... application/views///docs/template.php
    [7] => ... application/views////template.php
    [8] => ... system/views/ja/g/docs/template.php
    [9] => ... system/views/ja/g//template.php
    [10] => ... system/views/ja//docs/template.php
    [11] => ... system/views/ja///template.php
    [12] => ... system/views//g/docs/template.php
    [13] => ... system/views//g//template.php
    [14] => ... system/views///docs/template.php
    [15] => ... system/views////template.php
)
</pre>
<p>
ビューのみならず、コントローラ, ライブラリ, 設定ファイルなど全てのローディングではエレクトが適用されます。<br>
このことで、パッケージはローディングの対象の全てのファイルをリプレイスできるのです。<br>
</p>
