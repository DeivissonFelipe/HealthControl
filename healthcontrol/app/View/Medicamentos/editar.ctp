 <div class="container well col-sm-6 col-sm-offset-3">		

	<div class="col-sm-12">
		
		<h3 align="center">Edição de Medicamentos</h3>
		<br>

		<div class="col-sm-8 col-sm-offset-2">
		<?php echo $this->Form->create('Medicamento', array('controller' => 'medicamentos', 'url' => 'editar')); ?>
	
			<div class="form-group">
	            <?php echo $this->Form->input('id', array('type' => 'hidden'));?>
	        </div>

			<div class="form-group">
	            <?php echo $this->Form->input('nome', array('class' => 'form-control', 'label' => 'Nome'));?>
	        </div>			

			<div class="form-group">
	            <?php echo $this->Form->input('descricao', array('class' => 'form-control', 'label' => 'Descrição'));?>
	        </div>

	        <div class="form-group">
	            <?php echo $this->Form->input('qtd', array('class' => 'form-control', 'label' => 'Quantidade em Estoque'));?>
	        </div>

	        <div class="form-group">
	            <?php echo $this->Form->input('via', array('class' => 'form-control', 'label' => 'Via'));?>
	        </div>

	        <div class="form-group">
	            <?php echo $this->Form->input('categoria_id', array('class' => 'form-control', 'type' => 'select', 'label' => 'Categoria', 'options' => $categorias));?>
	        </div>
			
			<div class="form-group">
	            <?php echo $this->Form->input('indicacoes', array('class' => 'form-control', 'rows' => '5', 'cols' => '5', 'label' => 'Indicações'));?>
	        </div>

	        <div class="form-group">
	            <?php echo $this->Form->input('contra_indicacoes', array('class' => 'form-control', 'rows' => '5', 'cols' => '5', 'label' => 'Contra Indicações'));?>
	        </div>

			<br>
			<div class="col-sm-12 center-block">
                <?php echo $this->Form->submit('Cadastrar', array('class' => 'btn btn-lg btn-secondary btn-block')); ?>
            </div>

		<?php echo $this->Form->end(); ?>
		</div>

	</div>
</div>