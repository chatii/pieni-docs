<h1>DBライブラリ</h1>

<p>
MySQLのみをサポートします。<br>
簡易版のQuery Builderというイメージです。<br>
次のコードでロードします。<br>
</p>
<pre>$this->load->library('db');</pre>
<p>
内部で<code>config/db.php</code>がロードされます。<br>
組み立て済みキャッシュ実行後に組み立てキャッシュはフラッシュされます。<br>
</p>

<h2>クラスリファレンス</h2>
<h3>ユーティリティ</h3>
<ul>
<li>query($sql) - SQLを実行する。</li>
<li>trans_start() - トランザクションを開始する。</li>
<li>trans_complete() - トランザクションを完了する。</li>
<li>error() - 直近のエラーを返す。</li>
<li>last_query() - 直近のSQLを返す。</li>
</ul>

<h3>組み立て済みキャッシュ実行</h3>
<ul>
<li>get() - SELECT文を実行する。</li>
<li>insert() - INSERT文を実行する。</li>
<li>update() - UPDATE文を実行する。</li>
<li>delete() - DELETE文を実行する。</li>
</ul>

<h3>キャッシュ組み立て</h3>
<ul>
<li>select($select, $escape = TRUE)</li>
<li>from($from, $escape = TRUE)</li>
<li>join($table, $cond = NULL, $type = NULL, $escape = TRUE)</li>
<li>set($key, $value = NULL, $escape = TRUE)</li>
<li>where($key, $value = NULL, $escape = TRUE)</li>
<li>order_by($orderby, $direction = 'ASC', $escape = TRUE)</li>
<li>limit($value)</li>
<li>offset($offset)</li>
</ul>
