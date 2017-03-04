<div class="container well col-sm-6 col-sm-offset-3">		

	<h3 align="center">Editar Perfil</h3>
	<br>

	<div class="col-sm-8 col-sm-offset-2">

		<?php echo $this->Form->create('Usuario', array('controller' => 'usuarios', 'url' => 'editar')); ?>
			
			<div class="form-group">
	            <?php echo $this->Form->input('id', array('type' => 'hidden'));?>
	        </div>

			<div class="form-group">
	            <?php echo $this->Form->input('nome', array('class' => 'form-control', 'label' => 'Nome', 'id' => 'nome'));?>
	        </div>
			
			<div class="form-group">
	            <?php echo $this->Form->input('login', array('class' => 'form-control', 'label' => 'Login', 'id' => 'login'));?>
	        </div>

			<div class="form-group">
	            <?php echo $this->Form->input('senha', array('class' => 'form-control', 'label' => 'Senha', 'id' => 'senha', 'type' => 'password'));?>
	        </div>
			
			<div class="form-group">
	            <?php echo $this->Form->input('csenha', array('class' => 'form-control', 'label' => 'Confirmação de senha', 'id' => 'cSenha', 'type' => 'password'));?>
	        </div>

			<br>
			<div class="col-sm-12 center-block">
	            <?php echo $this->Form->submit('Salvar', array('class' => 'btn btn-lg btn-secondary btn-block login')); ?>
	        </div>

		<?php echo $this->Form->end(); ?>		
	</div>
</div>