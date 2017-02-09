<!DOCTYPE html>
<html lang="es">

	<head>

		<!-- CHARSET -->
			<?php echo $this->Html->charset(); ?>

		<!-- TÍTULO -->
			<title>
				<?php echo $title_for_layout . ' | ' . Configure::read('Environment')['name']; ?>
			</title>

		<!-- CSS -->
			<?php
				echo $this->Html->meta(null, null, array(
					'name' 		=> 'viewport',
					'content' 	=> 'width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no',
					'inline' 	=> false
				));
				echo $this->Html->meta('icon');
				echo $this->fetch('meta');
				
				echo $this->Html->css(['bootstrap.min', 'bastrap'/*, 'animate', 'frontend'*/]);
				echo $this->fetch('css');
			?>
	</head>

	<body>

		<!-- CONTENT -->
			<?php echo $this->fetch('content'); ?>

		<!-- SCRIPTS -->
			<?php
				echo $this->Html->script(['lib/jquery.min', 'lib/bootstrap.min'/*, 'lib/handlebars', 'main'*/]);
				echo $this->fetch('script');
			?>


	</body>

</html>