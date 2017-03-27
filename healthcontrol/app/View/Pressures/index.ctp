<div class="container well">		
	<div class="col-sm-2 "> 
	  		
		<ul class="nav nav-pills nav-stacked">
			<li align= "center">
				<?= $this->Html->link("Cadastro de Pressão",	array('controller' => 'pressures', 'action' => 'cadastrar')); ?>
			</li>
			<li align= "center">
				<?= $this->Html->link("Histórico Gráfico",	array('controller' => 'pressures', 'action' => 'grafico')); ?>
			</li>
		</ul>

	</div>

	<div class="col-sm-8 col-sm-offset-1" id="conteudo">

		<h3 align="center">Controle de Medição de Pressão</h3>
		<br><br>
		
		<table class="table table-striped table-bordered">
			
			<tr>
				<th class="text-center">Data</th>
				<th class="text-center">Valor 1 - <span style="font-style:italic">(pressão sistólica)</span></th>
				<th class="text-center">Valor 2 - <span style="font-style:italic">(pressão diastólica)</span></th>
			</tr>

			<?php foreach ($pressures as $p): ?>

			<tr>
				<td class="text-center">
					<?php echo $p['Pressure']['data']; ?>
				</td>
				<td class="text-center">
					<?php echo $p['Pressure']['valor1']; ?> 
				</td>

				<td class="text-center">
					<?php echo $p['Pressure']['valor2']; ?> 
				</td>

				<td class="text-center">
					<?= $this->Html->link("Editar",	array('controller' => 'pressures', 'action' => 'editar', $p['Pressure']['id'])); ?>
				</td>
				<td class="text-center">
					<?= $this->Html->link("Excluir", array('controller' => 'pressures', 'action' => 'excluir', $p['Pressure']['id']), array('confirm' => 'Confirma exclusão?')); ?>
				</td>
			</tr>

			<?php endforeach; ?>

		</table>
	</div>
</div>