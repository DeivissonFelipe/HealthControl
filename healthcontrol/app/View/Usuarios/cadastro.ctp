<div class="container well col-sm-6 col-sm-offset-3">		

	<div class="col-sm-12">
		
		<h3 align="center">Cadastro de Usuários</h3>
		<br><br>

		<div class="col-sm-6 col-sm-offset-3">
			<?php echo $this->Form->create('Usuario', array('controller' => 'usuarios', 'url' => 'cadastro')); ?>
				
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
	                <?php echo $this->Form->submit('Cadastrar', array('class' => 'btn btn-lg btn-secondary btn-block')); ?>
	            </div>

			<?php echo $this->Form->end(); ?>
		</div>

	</div>
</div>