<div class="col-sm-10 col-sm-offset-1">
	<h3 align="center" class="text-warning">Relatório Mensal</h3>
	<hr>
	
	<div class="col-sm-6">
		<div class="col-sm-8 col-sm-offset-2">
			<?php echo $this->Form->create('Receita'); ?>
				<div class="form-group">
		            <?php echo $this->Form->input('medicamento_id', array('class' => 'form-control', 'label' => 'Medicamento', 'type' => 'select', 'options' => $medicamentos));?>
		        </div>
		        <div class="form-group">
		            <?php echo $this->Form->input('mes', array('class' => 'form-control', 'label' => 'Mês', 'type' => 'select', 'options' => $meses));?>
		        </div>
				<div class="form-group">
		            <?php echo $this->Form->input('ano', array('class' => 'form-control', 'label' => 'Ano', 'type' => 'number', 'required'));?>
		        </div>
				
				<div class="col-sm-12 center-block">
	                <?php echo $this->Form->submit('Gerar Relatório', array('class' => 'btn btn-lg btn-secondary')); ?>
	            </div>

			<?php  echo $this->Form->end(); ?>
		</div>
	</div>

	<div class="col-sm-6">
	<?php if(isset($registros)){ ?>
		<h3 class="text-center">Mês <?php echo $this->request->data['Receita']['mes']; ?> de <?php echo $this->request->data['Receita']['ano']; ?></h3>
		<hr>
		<h4>Medicamento: <?php echo $medicamentos[$this->request->data['Receita']['medicamento_id']] ?></h4><br>
		<?php foreach ($registros as $r): ?>
		
			<strong>Dia: </strong><?php echo  $r['Cdiario']['data'];?>
			<hr>
			Sintomas: 
			<?php if(empty($r['Cdiario']['sintomas'])){?>
				Não cadastrado.
			<?php }else{?>
				<?php echo $r['Cdiario']['sintomas'];?>
			<?php } ?>
			<br><br><br>

		<?php endforeach; ?>		
	<?php } ?>
	<div>	
</div>