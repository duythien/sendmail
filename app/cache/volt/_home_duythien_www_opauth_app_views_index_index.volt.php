
<?php echo $this->getContent(); ?>
<div class="container">
      

	<div class="container text-center">
	<?php echo $this->tag->form(array('class' => 'form-signin')); ?>
	    	<h2 class="form-signin-heading">Sign in</h2>

			<small class="text-muted">Connect [your service] with your favorite social network</small>

			
<p>
<?php echo $this->tag->linkTo(array('session/loginOpauth/facebook', 'class' => 'btn btn-primary', '<i class="fa fa-facebook fa-3x"></i>')); ?>
</p>
<p>
<?php echo $this->tag->linkTo(array('session/loginOpauth/twitter', 'class' => 'btn btn-primary', '<i class="fa fa-twitter fa-3x"></i>')); ?>
</p>

<p>
<?php echo $this->tag->linkTo(array('session/loginOpauth/google', 'class' => 'btn btn-primary', '<i class="fa fa-google-plus fa-3x"></i>')); ?>
</p>


<br><br>


		    <small class="text-muted">Or sign in with [your service]</small>
		    <br><br>
	    	
	        <input id="ember360" class="ember-view ember-text-field form-control login-input" placeholder="Email Address" type="text">
	        <input id="ember361" class="ember-view ember-text-field form-control login-input-pass" placeholder="Password" type="password">

	        <script id="metamorph-22-start" type="text/x-placeholder"></script><script id="metamorph-22-end" type="text/x-placeholder"></script>

	        <button class="btn btn-lg btn-primary btn-block btn-center" type="submit" data-bindattr-3="3">Sign in</button>
	        <br>
	        <small class="create-account text-muted">Dont have a [your service] or social network account? <button id="ember363" class="ember-view btn btn-sm btn-default"> Sign Up </button> </small>
	    </form>
    </div>	