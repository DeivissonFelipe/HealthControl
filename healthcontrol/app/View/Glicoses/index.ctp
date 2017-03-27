<div class="container well">		
	<div class="col-sm-2 "> 
	  		
		<ul class="nav nav-pills nav-stacked">
			<li align= "center">
				<?= $this->Html->link("Cadastrar taxa de glicose",	array('controller' => 'pesos', 'action' => 'cadastrar')); ?>
			</li>
			<li align= "center">
				<?= $this->Html->link("Histórico Gráfico",	array('controller' => '', 'action' => '')); ?>
			</li>
		</ul>

	</div>

	<div class="col-sm-8 col-sm-offset-1" id="conteudo">

		<h3 align="center">Controle de Taxa de Glicose</h3>
		<br><br>
		
		<table class="table table-striped table-bordered">
			
			<tr>
				<th class="text-center">Data</th>
				<th class="text-center">Glicose</th>
			</tr>

			<?php foreach ($glicoses as $g): ?>

			<tr>
				<td class="text-center">
					<?php echo $g['Glicose']['data']; ?>
				</td>
				<td class="text-center">
					<?php echo $g['Glicose']['valor']; ?>

				</td>
				
				<td class="text-center">
					<?= $this->Html->link("Editar",	array('controller' => 'glicoses', 'action' => 'editar', $g['Glicose']['id'])); ?>
				</td>
				<td class="text-center">
					<?= $this->Html->link("Excluir", array('controller' => 'glicoses', 'action' => 'excluir', $g['Glicose']['id']), array('confirm' => 'Confirma exclusão?')); ?>
				</td>
			</tr>

			<?php endforeach; ?>

		</table>
	</div>
</div>