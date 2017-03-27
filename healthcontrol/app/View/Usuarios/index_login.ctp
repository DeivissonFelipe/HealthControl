<div class="container well col-sm-6 col-sm-offset-3">		

	<div class="col-sm-12" id="conteudo">
	
		<h3 align="center">Formulário de Acesso</h3>
		<br><br>
		<div class="col-sm-6 col-sm-offset-3">
			<?php echo $this->Form->create('Usuario', array('controller' => 'usuarios', 'url' => 'login')); ?>
				
				<div class="form-group">
		            <?php echo $this->Form->input('login', array('class' => 'form-control'));?>
		        </div>

				<div class="form-group">
		            <?php echo $this->Form->input('senha', array('class' => 'form-control', 'type' => 'password'));?>
		        </div>
				<br>
				
				<div class="col-sm-12 center-block">
	                <?php echo $this->Form->submit('Acessar', array('class' => 'btn btn-lg btn-secondary btn-block')); ?>
	            </div>

			<?php echo $this->Form->end(); ?>
		</div>

  	</div>

</div>


	