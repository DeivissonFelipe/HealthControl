<div class="container col-sm-8 col-sm-offset-2">		
	<div class="page-header">
		<h3 align="center">Aplicações Extras</h3>
	</div>	
	<br><br>


	<div class="row">
	    <div class="col-md-4">
	      <div class="thumbnail">
	          <?php echo 
	          	$this->Html->link(
	          	$this->Html->image('imc3.jpg', array('width' => '400')),
	          	array('controller' => 'pesos', 'action' => 'imc'),
	          	array('escape' => false)
	          	);
	          ?>
	          <div class="caption">
	            <h4 align="center">Cálculo de IMC</h4>
	          </div>
	      </div>
	    </div>


	    <div class="col-md-4">
	      <div class="thumbnail">
	        <?php echo 
	          	$this->Html->link(
	          	$this->Html->image('arterial.jpg', array('width' => '400')),
	          	array('controller' => 'pressures', 'action' => 'index'),
	          	array('escape' => false)
	          	);
	        ?>  
	        <div class="caption">
	        	<h4 align="center">Histórico de pressão sanguínea</h4>
	        </div>
	      </div>
	    </div>


	    <div class="col-md-4">
	      <div class="thumbnail">
	      	<?php echo 
	          	$this->Html->link(
	          	$this->Html->image('balança.jpg', array('width' => '400')),
	          	array('controller' => 'pesos', 'action' => 'index'),
	          	array('escape' => false)
	          	);
	        ?>  
			<div class="caption">
				<h4 align="center">Histórico de medição de peso</h4>
			</div>
	      </div>
	    </div>

	</div>
			
<!-- _________________________________________________________________________________________________________________ -->


	<div class="row">
	    <div class="col-md-4 col-sm-offset-1">
	      <div class="thumbnail">
			<?php echo 
	          	$this->Html->link(
	          	$this->Html->image('glicose.jpg', array('width' => '400')),
	          	array('controller' => 'glicoses', 'action' => 'index'),
	          	array('escape' => false)
	          	);
	        ?>  
			<div class="caption">
				<h4 align="center">Histórico de medição de glicose</h4>
			</div>
	      </div>
	    </div>

		<div class="col-md-1"></div>

	    <div class="col-md-4 col-sm-offset-1">
	      <div class="thumbnail">
	        <?php echo 
	          	$this->Html->link(
	          	$this->Html->image('meditacao.png', array('width' => '400')),
	          	array('controller' => 'pages', 'action' => 'dicas'),
	          	array('escape' => false)
	          	);
	        ?>
			<div class="caption">
				<h4 align="center">Dicas de saúde</h4>
			</div>
	      </div>
	    </div>

	</div>
	
</div>