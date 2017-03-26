<div class="container well col-sm-6 col-sm-offset-3">		

	<h3 align="center">Adicionar Sintomas</h3>
	<br>

	<div class="col-sm-8 col-sm-offset-2">

		<?php echo $this->Form->create('Cdiario', array('controller' => 'receitas', 'url' => 'atualizaSintomas')); ?>
			
			
	        <?php echo $this->Form->input('id');?>
	        <?php echo $this->Form->input('usuario_id', array('type' => 'hidden', 'options' => array($this->request->data['Cdiario']['usuario_id'])));?>
	        <?php echo $this->Form->input('medicamento_id', array('type' => 'hidden', 'options' => array($this->request->data['Cdiario']['medicamento_id']) ));?>
	        <?php echo $this->Form->input('turno', array('type' => 'hidden'));?>
	        <?php echo $this->Form->input('data',  array('type' => 'hidden'));?>			
			
			<!-- _______________________________________________________________ -->
	
			<div class="form-group">
	            <?php echo $this->Form->input('sintomas', array('class' => 'form-control', 'rows' => '5', 'cols' => '5', 'label' => 'Sintomas'));?>
	        </div>

			<br>
			<div class="col-sm-4 col-sm-offset-4">
	            <?php echo $this->Form->submit('Salvar', array('class' => 'btn btn-lg btn-secondary btn-block login')); ?>
	        </div>

		<?php echo $this->Form->end(); ?>		
	</div>
</div>