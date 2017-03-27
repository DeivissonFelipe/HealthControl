<div class="container well">		
	<div class="col-sm-2 "> 
	  		
		<ul class="nav nav-pills nav-stacked">
			<li align= "center">
				<?= $this->Html->link("Listar Receitas",	array('controller' => 'receitas', 'action' => 'index')); ?>
			</li>
			<li align= "center">
				<?= $this->Html->link("Medicamento do Dia",	array('controller' => 'receitas', 'action' => 'controleDiario')); ?>
			</li>
			<li align= "center">
				<?= $this->Html->link("Relatório de Sintomas",	array('controller' => 'receitas', 'action' => 'relatorio')); ?>
			</li>
		</ul>

	</div>

	<div class="col-sm-8 col-sm-offset-1" id="conteudo">

		<h3 align="center">Cadastrar Receita</h3>
		<br><br>
		<div class="col-sm-8 col-sm-offset-2">
			<?php echo $this->Form->create('Receita', array('controller' => 'receitas', 'url' => 'cadastrar')); ?>
			
				<div class="form-group">
		            <?php echo $this->Form->input('id', array('class' => 'form-control', 'label' => 'Id'));?>
		        </div>
				<div class="form-group">
		            <?php echo $this->Form->input('medico', array('class' => 'form-control', 'label' => 'Médico'));?>
		        </div>
				<div class="form-group">
		            <?php echo $this->Form->input('usuario_id', array('class' => 'form-control', 'type' => 'hidden', 'value' => $this->Session->read('User')[0]['Usuario']['id']));?>
		        </div>
				<div class="form-group">
		            <?php echo $this->Form->input('medicamento_id', array('class' => 'form-control', 'label' => 'Medicamento'));?>
		        </div>
		        <div class="form-group">
		            <?php echo $this->Form->input('turno', array('class' => 'form-control', 'label' => 'Turno'));?>
		        </div>
				<br>
				<div class="col-sm-12 center-block">
		            <?php echo $this->Form->submit('Cadastrar', array('class' => 'btn btn-lg btn-secondary btn-block')); ?>
		        </div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>