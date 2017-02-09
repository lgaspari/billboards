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
				
				echo $this->Html->css(['bootstrap.min', 'bastrap'/*, 'backend'*/]);
				echo $this->fetch('css');
			?>
	</head>

	<body>
			
		<!-- HEADER -->
			<?php /*echo $this->element('header');*/ ?>

		<!-- NAV -->
			<?php 
				// Si está logeado le muestro la nav
				/*if( AuthComponent::user('user_id') ) {
					echo $this->element('nav');
				}*/
			?>
		
		<!-- CONTENT -->
			<div id="content" class="container">

				<!-- FLASH -->
					<?php
						// Muestro siempre los mensajes flash
						echo $this->Session->flash();
					?>

				<!-- PERMISOS -->
					<?php
						// Si está logeado y hay un error de permisos
						/*if( AuthComponent::user('user_id') && $this->Session->check('Message.permisos') ) {
							echo $this->Session->flash('permisos');
						}*/
					?>

				<!-- BREADCRUMB -->
					<?php 
						// Si está logeado le muestro el breadcrumb
						/*if( AuthComponent::user('user_id') ) {
							echo $this->Breadcrumb->create($this->request->params['controller'], $this->request->params['action'], $this->request->params['pass']);
						}*/
					?>

				<!-- CONTENIDO -->
					<?php echo $this->fetch('content'); ?>

			</div>

		<!-- FOOTER -->
			<?php /*echo $this->element('footer');*/ ?>

		<!-- SCRIPTS -->
			<?php
				echo $this->Html->script(['lib/jquery.min', 'lib/bootstrap.min'/*, 'lib/handlebars', 'main'*/]);
				echo $this->fetch('script');
			?>

	</body>

</html>