<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		HealthControl: <?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon'); //icone da aba
		echo $this->Html->css('bootstrap');
		//echo $this->Html->css('cake.generic');
		echo $this->Html->script('ajax');
		echo $this->Html->script('bootstrap');

		// ------------------------------------------->
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
	<style>
       .error{
             color:red
       };
	</style>
	
</head>
<body>
	<div id="container">
		<div id="header">
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <?= $this->Html->link("HealthControl", array('controller' => 'pages', 'action' => 'index'), array('class'=>'navbar-brand')); ?>
			    </div>
			    <ul class="nav navbar-nav">
			    	<li><?= $this->Html->link("Medicamentos", array('controller' => 'medicamentos', 'action' => 'index')); ?></li>
			    	<li><?= $this->Html->link("Receitas/Prescrições", array('controller' => 'receitas', 'action' => 'index')); ?></li>
			    	<li><?= $this->Html->link("Extras", array('controller' => 'extras', 'action' => 'index')); ?></li>
			
			    </ul>

				<!-- if (sem usuario logado) -->
				<?php  if(!$this->Session->check('User')){ ?>
				
			    <ul class="nav navbar-nav navbar-right">
			      <li><?= $this->Html->link("Cadastre-se",	array('controller' => 'usuarios', 'action' => 'cadastro')); ?></li>
				  <li><?= $this->Html->link("Login",	array('controller' => 'usuarios', 'action' => 'login')); ?></li>      
			    </ul>
				
				<!-- else -->
				<?php  }else{ ?>

				<ul class="nav navbar-nav navbar-right">
					<?php $usuario = $this->Session->read('User'); ?>
					<li class="dropdown"><?php echo $this->Html->link("Bem vindo(a) " . $usuario['0']['Usuario']['nome'], array(), array('class' =>'dropdown-toggle', 'data-toggle' => 'dropdown')); ?>
				        <ul class="dropdown-menu">
				          <li><?php echo $this->Html->link("Editar Perfil",	array('controller' => 'usuarios', 'action' => 'editar')); ?></li>
				          <li><?php echo $this->Html->link("Logout",	array('controller' => 'usuarios', 'action' => 'logout')); ?></li>
				        </ul>
				    </li>
			    </ul>
				
				<?php  }?>

			  </div>
			</nav>
		</div>
		<div id="content">
			
			<?php echo $this->fetch('content'); ?>

		</div>
		<div id="footer">
		
			 <!-- <div class="container well col-sm-6 col-sm-offset-3" align="center">  -->
				 <!-- <?php echo $this->element('sql_dump'); ?>  -->
			 <!-- </div>  -->
			
			
			<div class="container well col-sm-6 col-sm-offset-3" style="background-color: #FA8072;" align="center">
				<h4><?php echo $this->Flash->render(); ?></h4>
			</div>
			
		</div>
	</div>
	
	

</body>
</html>
