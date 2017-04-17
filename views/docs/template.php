<!DOCTYPE html>
<html lang="<?php h($instance->uri->language); ?>">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php direct('twbs/bootstrap/css/bootstrap.css'); ?>">

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="<?php direct('jquery/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php direct('twbs/bootstrap/js/bootstrap.js'); ?>"></script>

    <link rel="stylesheet" href="<?php direct('default.css'); ?>">

    <title>pieni - A PHP Framework &#039;Smaller and Flexible&#039;</title>
  </head>
  <body>

<?php if ($instance->uri->action === 'index'): ?>

<?php $instance->load->view('header', $vars); ?>
<?php $instance->load->view($instance->uri->action, $vars); ?>
    <div class="container">
<?php $instance->load->view('footer', $vars); ?>
    </div>

<?php else: ?>

<?php $instance->load->view('header', $vars); ?>
    <div class="container">
      <div class="row">
        <div class="col col-sm-9">
<?php $instance->load->view($instance->uri->action, $vars); ?>
          <footer class="footer">
<?php $instance->load->view('footer', $vars); ?>
          </footer>
        </div>
        <div class="col col-sm-3">
<?php $instance->load->view('sidebar', $vars); ?>
        </div>
      </div>
    </div>

<?php endif; ?>

  </body>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-89527332-1', 'auto');
    ga('send', 'pageview');
  </script>
</html>
