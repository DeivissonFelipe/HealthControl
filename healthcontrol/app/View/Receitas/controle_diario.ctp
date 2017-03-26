<div class="container well">		
	<div class="col-sm-2 "> 
	  		
		<ul class="nav nav-pills nav-stacked">
			<li align= "center">
				<?= $this->Html->link("Registros de Receitas",	array('controller' => 'receitas', 'action' => 'index')); ?>
			</li>
			<li align= "center">
				<?= $this->Html->link("Adicionar uma Receita",	array('controller' => 'receitas', 'action' => 'cadastrar')); ?>
			</li>
			<li align= "center">
				<?= $this->Html->link("Relatório de Sintomas",	array('controller' => 'receitas', 'action' => 'relatorio')); ?>
			</li>
		</ul>

	</div>

	<div class="col-sm-8 col-sm-offset-1" id="conteudo">

		<h3 align="center">Controle da Medicação Diária</h3>
		<br><br>
	    <div class="panel panel-danger">
			<div class="panel-heading">Medicação Pendente</div>
			<div class="panel-body">
				<div class="col-sm-8 col-sm-offset-2">
					<table class="table table-hover">
					    <thead>
							<tr>
								<th class="text-center">Medicamento</th>
								<th class="text-center">Turno</th>
								<th class="center">Seleção</th>
							</tr>
						</thead>
						<tbody>
							<?php echo $this->Form->create('Receita', array('controller' => 'receitas', 'url' => 'registraDiario')); ?>
							<?php foreach ($pendentes as $p): ?>
								<tr>
									<td class="text-center">
										<?php echo $p['Medicamento']['nome']; ?>
									</td>
									<td class="text-center">
										<?php  
											if($p['Receita']['turno'] == 1){
												echo 'Manhã';
											}elseif ($p['Receita']['turno'] == 2) {
												echo 'Tarde';
											}elseif ($p['Receita']['turno'] == 3) {
												echo 'Noite';
											}
										?>
									</td>
									<td class="text-center">
										<input type="checkbox" name="var[]" value= <?php echo $p['Receita']['id'];?> >
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel-footer">
				<div class="row">
					<div class="col-sm-10"></div>
					<div class="col-sm-2">
							<?php echo $this->Form->submit('Aplicar', array('class' => 'btn btn-danger btn-lg')); ?>
						<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div>
	    </div>
		
		<br><br>
		<div class="panel panel-success">
	      <div class="panel-heading">Medicação Administrada</div>
	      <div class="panel-body">
	      	

			<div class="col-sm-8 col-sm-offset-2">
					<table class="table table-hover">
					    <thead>
							<tr>
								<th class="text-center">Medicamento</th>
								<th class="text-center">Turno</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($registradas as $r): ?>
								<tr>
									<td class="text-center">
										<?php echo $r['Medicamento']['nome']; ?>
									</td>
									<td class="text-center">
										<?php  
											if($r['Cdiario']['turno'] == 1){
												echo 'Manhã';
											}elseif ($r['Cdiario']['turno'] == 2) {
												echo 'Tarde';
											}elseif ($r['Cdiario']['turno'] == 3) {
												echo 'Noite';
											}
										?>
									</td>
									<td class="text-center">
										
										<?= $this->Html->link('+', array('controller' => 'receitas', 
																'action' => 'atualizaSintomas',
																$r['Cdiario']['id'] ), 
																array('class' => 'btn btn-warning')); ?>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
	      </div>
	    </div>
	</div>
</div>