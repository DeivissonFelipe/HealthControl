<div class="container well">		
	<div class="col-sm-2 "> 
	  		
		<ul class="nav nav-pills nav-stacked">
			<li align= "center">
				<?= $this->Html->link("Adicionar uma Receita",	array('controller' => 'receitas', 'action' => 'cadastrar')); ?>
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

		<h3 align="center">Receitas</h3>
		<br><br>
		
		<table class="table table-striped table-bordered">
			
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">Médico</th>
				<th class="text-center">Medicamentos</th>
				<th class="text-center">Turno</th>
			</tr>
			
			<?php foreach ($receitas as $r): ?>

			<tr>
				<td class="text-center">
					<?php echo $r['Receita']['id']; ?>
				</td>
				<td class="text-center">
					<?php echo $r['Receita']['medico']; ?>
				</td>
				<td class="text-center">
					<?php echo $r['Medicamento']['nome']; ?>
				</td>
				<td class="text-center">
					<?php  
						if($r['Receita']['turno'] == 1){
							echo 'Manhã';
						}elseif ($r['Receita']['turno'] == 2) {
							echo 'Tarde';
						}elseif ($r['Receita']['turno'] == 3) {
							echo 'Noite';
						}
					?>
				</td>
				<td class="text-center">
					<?= $this->Html->link("Editar",	array('controller' => 'receitas', 'action' => 'editar', $r['Receita']['id'])); ?>
				</td>
				<!-- <td class="text-center">
					<?= $this->Html->link("Excluir", array('controller' => 'receitas', 'action' => 'excluir', $r['Receita']['id']), array('confirm' => 'Confirma exclusão?')); ?>
				</td> -->
			</tr>

			<?php endforeach; ?>
			
		</table>
		

	</div>
</div>