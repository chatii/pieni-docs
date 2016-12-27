<h1>Loadライブラリ</h1>

<p>
Coreインスタンスの内部でエレクトされます。<br>
ControllerメソッドはCoreインスタンスがControllerインスタンスの生成のために使用されます。<br>
ロードされたビューの中では$instanceでコントローラを参照できます。<br>
ライブラリ内でコントローラを参照するときはget_instance()を使用します。<br>
</p>

<h2>クラスリファレンス</h2>
<ul>
<li>controller($target, $action, $param_list) - コントローラをロードする。</li>
<li>view($view, $vars = []) - ビューをロードする。</li>
<li>library($library) - ライブラリをロードする。</li>
<li>config($name) - 設定ファイルをロードする。</li>
</ul>
