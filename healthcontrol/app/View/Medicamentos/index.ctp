<div class="container well">		
	<div class="col-sm-2 "> 
	  		
		<ul class="nav nav-pills nav-stacked">
			<li align= "center">
				<?= $this->Html->link("Adicionar um Medicamento",	array('controller' => 'medicamentos', 'action' => 'cadastrar')); ?>
			</li>
		</ul>

	</div>

	<div class="col-sm-8 col-sm-offset-1" id="conteudo">

		<h3 align="center">Medicamentos</h3>
		<br><br>
		
		<table class="table table-striped table-bordered">
			
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">Nome</th>
				<th class="text-center">Quantidade</th>
				<th class="text-center">Via</th>
				<th class="text-center">Categoria</th>
				<th class="text-center">Editar</th>
				<th class="text-center">Excluir</th>
			</tr>
			
			<?php foreach ($medicamentos as $m): ?>

			<tr>
				<td class="text-center">
					<?php echo $m['Medicamento']['id']; ?>
				</td>
				<td class="text-center">
					<?= $this->Html->link($m['Medicamento']['nome'],	array('controller' => 'medicamentos', 'action' => 'indexM', $m['Medicamento']['id'])); ?>
				</td>
				<td class="text-center">
					<?php echo $m['Medicamento']['qtd']; ?>
				</td>
				<td class="text-center">
					<?php echo $m['Medicamento']['via']; ?>
				</td>
				<td class="text-center">
					<?php echo $m['Categoria']['nome']; ?>
				</td>
				<td class="text-center">
					<?= $this->Html->link("Editar",	array('controller' => 'medicamentos', 'action' => 'editar', $m['Medicamento']['id'])); ?>
				</td>
				<td class="text-center">
					<?= $this->Html->link("Excluir", array('controller' => 'medicamentos', 'action' => 'excluir', $m['Medicamento']['id']), array('confirm' => 'Confirma exclusão?')); ?>
				</td>
			</tr>

			<?php endforeach; ?>
			

		</table>
		
			
		
		

	</div>
</div>