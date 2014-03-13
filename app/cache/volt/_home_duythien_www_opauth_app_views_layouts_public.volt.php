<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    <div class="container" style="width: auto;">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <?php echo $this->tag->linkTo(array(null, 'class' => 'brand', 'Sitepoint')); ?>
        <div class="nav-collapse">

          <ul class="nav"><?php $menus = array('Home' => null, 'Signup' => 'session/signup', 'Login' => 'session/loginOpauth'); ?><?php foreach ($menus as $key => $value) { ?>
              <?php if ($value == $this->dispatcher->getControllerName()) { ?>
              <li class="active"><?php echo $this->tag->linkTo(array($value, ($key))); ?></li>
              <?php } else { ?>
              <li><?php echo $this->tag->linkTo(array($value, ($key))); ?></li>
              <?php } ?><?php } ?></ul>

      </div>
    </div>
  </div>
</div>

<div class="container main-container">
  <?php echo $this->getContent(); ?>
</div>

<footer>
Made with love by the Phalcon Team

    <?php echo $this->tag->linkTo(array('privacy', 'Privacy Policy')); ?>
    <?php echo $this->tag->linkTo(array('terms', 'Terms')); ?>

© 2013 Phalcon Team.
</footer>