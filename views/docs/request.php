<h1>コントローラが呼ばれるまで</h1>

<p>
index.phpとlibraries/Core.phpは、合わせても数十行です。<br>
Controllerインスタンスの生成までのフローを解説します。<br>
</p>

<h2>index.phpとlibraries/Core.php</h2>
<h3>index.php内部</h3>
<ul>
<li>パッケージリストの定義
<p>使用するパッケージを、優先度の高い順に指定します。例: <code>$package_list = [APPPATH, BASEPATH];</code></p>
</li>
<li>Coreヘルパーのインクルード
<p>全てのパッケージのCoreヘルパーを順にインクルードします。</p>
</li>
<li>Coreライブラリのエレクト
<p>この時点からControllerインスタンスが生成されるまでの間、get_instance()はCoreインスタンスへの参照を返します。</p>
</li>
</ul>

<h3>libraries/Core.php内部</h3>
<ul>
<li>Loadライブラリのエレクト
<p>これ以降、各種ローディングが使用できます。Loadライブラリは内部でエレクトを使用します。</p>
</li>
<li>Core設定ファイルのロード
<p>URIセグメントのパースに必要な、言語リスト、アクターリストを読み込みます。</p>
</li>
<li>Sessionライブラリのロード
<p>言語の保持に必要な、Sessionライブラリをロードします。</p>
</li>
<li>URIライブラリのロード
<p>URIセグメントをパースします。</p>
</li>
<li>Controllerインスタンスの生成
<p>Coreインスタンスの全てのメンバの参照をControllerインスタンスが引継ぎ、処理がコントローラへ渡されます。</p>
</li>
</ul>

<h2>URIセグメント</h2>
<p>先頭から、言語、アクター、ターゲット、アクション、それ以降はパラメータとしてパースされます。</p>
<p>言語が指定された場合は、言語をセッションにストアし、言語セグメントを省略したURLへリダイレクトします。</p>
<pre>example.com/ja/m/item/view/1</pre>
<pre>$instance->session->language = 'ja';</pre>
<pre>example.com/m/item/view/1</pre>
<pre>
$instance->uri->language = 'ja';
$instance->uri->actor = 'm';
$instance->uri->target = 'item';
$instance->uri->action = 'view';
$instance->uri->param_list: ['1'];
</pre>
<p>この場合、コントローラであるItemクラスのviewメソッドに1個の引数'1'が渡されます。</p>
