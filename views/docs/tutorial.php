<h1>Nonverbal Tutorial</h1>

<h2>Config</h2>
/application/config/core.php
<pre class="card">
&lt;?php
$config = (object) [
	'language_list' => [
		'ja',
		'en',
	],
	'actor_list' => [
		'g',
		'm',
		'a',
	],
	'page_target_list' => [
	],
	'crud_target_list' => [
	],
	'default_target' => 'welcome',
];
</pre>

<h2>Controller / View</h2>
/application/controllers/Welcome.php
<pre class="card">
&lt;?php
class Welcome {

	public function index()
	{
		$this->load->view('template');
	}
}
</pre>
/application/views/template.php
<pre class="card">
&lt;?php h('Hello, world!'); ?>
</pre>

<h2>$instance / $vars</h2>
/application/controllers/Welcome.php
<pre class="card">
&lt;?php
class Welcome {

	public function index()
	{
		$vars = (object) [];
		$vars->name = 'pieni';
		$this->load->view('template', $vars);
	}
}
</pre>
/application/views/template.php
<pre class="card">
&lt;?php $instance->load->view($instance->uri->action, $vars); ?>
</pre>
/application/views/welcome/index.php
<pre class="card">
&lt;?php h('Hello, '.$vars->name.'!'); ?>
&lt;?php r($instance); ?>
</pre>
