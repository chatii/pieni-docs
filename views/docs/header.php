    <!-- Fixed navbar -->
    <nav class="navbar navbar-toggleable-sm navbar-light bg-faded fixed-top">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="<?php href(''); ?>">pieni</a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link" href="<?php href('category'); ?>">Demo</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php href('docs/download'); ?>">Download</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php href('docs/tutorial'); ?>">Documentation</a></li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php l('language'); ?></a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
<?php foreach ($instance->config->core->language_list as $language): ?>
              <a class="dropdown-item" href="<?php href($language, FALSE); ?>"><?php l($language); ?></a>
<?php endforeach; ?>
            </div>
          </li>
        </ul>
      </div>
    </nav>
