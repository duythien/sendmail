<!DOCTYPE html>
<html>
	<head>
		<title>Phalcon PHP Framework</title>
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
		<?php echo Phalcon\Tag::stylesheetLink('css/css.css'); ?> 
	</head>
	<body>
		<?php echo $this->getContent(); ?>
	</body>
</html>