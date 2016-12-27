<h1>Coreヘルパー</h1>

<p>
全てのパッケージのCoreヘルパーが優先度順に呼ばれます。<br>
よって<code>if ( ! function_exists('elect')) {}</code>のようにすると上位でのオーバーライドを許可するフォールバック先になります。<br>
</p>

<h2>定義済み関数</h2>
<ul>
<li>elect($dir, $file)</li>
<li>get_instance()</li>
<li>show_404()</li>
<li>show_error($message)</li>
<li>site_url($uri)</li>
<li>href($uri = '')</li>
<li>function direct($file)</li>
<li>redirect($uri = '')</li>
<li>h($string, $return = FALSE)</li>
<li>r($expression)</li>
<li>v($expression)</li>
</ul>
