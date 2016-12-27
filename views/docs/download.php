<h1>ダウンロード</h1>

<h2>GitHub</h2>
<a href="https://github.com/sagittar-org/pieni">https://github.com/sagittar-org/pieni</a>

<h2>インストール方法</h2>
<p>
Apacheのmod_rewriteが有効なら何も行うことなく、このドキュメンテーションが表示されるでしょう。<br>
デモを試すには以下を実行。<br>
<pre>
echo 'CREATE DATABASE `pieni_crud`;' | mysql
mysql pieni_crud < crud/misc/pieni_crud.dump 
</pre>
</p>
<p>
/package_list.phpに<code>define('APPPATH', FCPATH.'application/');</code>と定義されています。<br>
/applicationディレクトリを作成し、いつでもハックをスタートできます!<br>
</p>
