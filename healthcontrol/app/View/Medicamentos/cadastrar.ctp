 <div class="container well col-sm-6 col-sm-offset-3">		
		
	<h3 align="center">Cadastro de Medicamentos</h3>
	<br>

	<div class="col-sm-8 col-sm-offset-2">
	<?php echo $this->Form->create('Medicamento', array('controller' => 'medicamentos', 'url' => 'cadastrar')); ?>
		
		<div class="form-group">
            <?php echo $this->Form->input('id', array('class' => 'form-control', 'label' => 'Id'));?>
        </div>

		<div class="form-group">
            <?php echo $this->Form->input('nome', array('class' => 'form-control', 'label' => 'Nome'));?>
        </div>			
        
        <div class="form-group">
            <?php echo $this->Form->input('usuario_id', array('class' => 'form-control', 'type' => 'hidden', 'value' => $this->Session->read('User')[0]['Usuario']['id']));?>
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