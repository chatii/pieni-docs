<!DOCTYPE html>
<html lang="<?php h($instance->uri->language); ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pieni - <?php l('title_'.$instance->uri->action); ?></title>
    <link rel="stylesheet" href="<?php direct('twbs/bootstrap/dist/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php direct('default.css'); ?>">
    <script src="<?php direct('jquery/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?php direct('twbs/bootstrap/dist/js/bootstrap.js'); ?>"></script>
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
      <div class="row col-sm-9">
<?php $instance->load->view($instance->uri->action, $vars); ?>
        <footer class="footer">
<?php $instance->load->view('footer', $vars); ?>
        </footer>
      </div>
      <div class="row col-sm-3">
<?php $instance->load->view('sidebar', $vars); ?>
      </div>
    </div>

<?php endif; ?>

  </body>
</html>
