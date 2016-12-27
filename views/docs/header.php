    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php href(''); ?>" style="padding-top:10px"><img src="<?php direct('logo.php'); ?>" style="height:36px;"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php href('category'); ?>">Demo</a></li>
            <li><a href="<?php href('docs/download'); ?>">Download</a></li>
            <li><a href="<?php href('docs/tutorial'); ?>">Documentation</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><div id="google_translate_element" style="margin-top: 13px;"></div></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php h(site_url('ja')); ?>">Japanese</a></li>
                <li><a href="<?php h(site_url('en')); ?>">English</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<script type="text/javascript">function googleTranslateElementInit() {  new google.translate.TranslateElement({pageLanguage: 'ja', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');}</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
