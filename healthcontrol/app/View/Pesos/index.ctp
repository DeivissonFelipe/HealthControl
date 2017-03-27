<div class="container well">		
	<div class="col-sm-2 "> 
	  		
		<ul class="nav nav-pills nav-stacked">
			<li align= "center">
				<?= $this->Html->link("Cadastrar uma medição de peso",	array('controller' => 'pesos', 'action' => 'cadastrar')); ?>
			</li>
			<li align= "center">
				<?= $this->Html->link("Histórico Gráfico",	array('controller' => 'pesos', 'action' => 'grafico')); ?>
			</li>
		</ul>

	</div>

	<div class="col-sm-8 col-sm-offset-1" id="conteudo">

		<h3 align="center">Controle de Medição de Peso</h3>
		<br><br>
		
		<table class="table table-striped table-bordered">
			
			<tr>
				<th class="text-center">Data</th>
				<th class="text-center">Pesagem</th>
			</tr>

			<?php foreach ($pesos as $p): ?>

			<tr>
				<td class="text-center">
					<?php echo $p['Peso']['data']; ?>
				</td>
				<td class="text-center">
					<?php echo $p['Peso']['peso']; ?>
				</td>
				
				<td class="text-center">
					<?= $this->Html->link("Editar",	array('controller' => 'pesos', 'action' => 'editar', $p['Peso']['id'])); ?>
				</td>
				<td class="text-center">
					<?= $this->Html->link("Excluir", array('controller' => 'pesos', 'action' => 'excluir', $p['Peso']['id']), array('confirm' => 'Confirma exclusão?')); ?>
				</td>
			</tr>

			<?php endforeach; ?>

		</table>
	</div>
</div>