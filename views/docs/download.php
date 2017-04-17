<h1>ダウンロード</h1>

<h2>GitHub</h2>
<p>
パッケージごとに以下のリポジトリがあります。<br>
個別のパッケージが必要な場合以外は後述のインストール方法が便利です。<br>
</p>

<ul>
<li><a href="https://github.com/sagittar-org/pieni-base">sagittar-org/pieni-base</a></li>
<li><a href="https://github.com/sagittar-org/pieni-misc">sagittar-org/pieni-misc</a></li>
<li><a href="https://github.com/sagittar-org/pieni-crud">sagittar-org/pieni-crud</a></li>
<li><a href="https://github.com/sagittar-org/pieni-docs">sagittar-org/pieni-docs</a></li>
<li><a href="https://github.com/sagittar-org/pieni">sagittar-org/pieni</a></li>
</ul>

<h2>インストール方法</h2>
<p>全てのパッケージをまとめてインストールするには以下を実行。</p>
<pre class="card">
curl https://raw.githubusercontent.com/sagittar-org/pieni/master/misc/install.sh | /bin/sh
</pre>
<p>
Apacheのmod_rewriteが有効なら何も行うことなく、このドキュメンテーションが表示されるでしょう。<br>
デモを試すには以下を実行。<br>
<pre class="card">
echo 'CREATE DATABASE `pieni_crud`;' | mysql
mysql pieni_crud < vendor/sagittar-org/pieni-crud/misc/pieni_crud.dump
</pre>
</p>
<p>
index.phpに<code>define('APPPATH', FCPATH);</code>と定義されています。<br>
index.phpと同じ階層にcontrollersディレクトリやviewsディレクトリを作成し、いつでもハックをスタートできます!<br>
</p>
