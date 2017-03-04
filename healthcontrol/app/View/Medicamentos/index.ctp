<div class="container well">		
	<div class="col-sm-2 "> 
	  		
		<ul class="nav nav-pills nav-stacked">
			<li align= "center">
				<?= $this->Html->link("Adicionar um Medicamento",	array('controller' => 'medicamentos', 'action' => 'cadastrar')); ?>
			</li>
		</ul>

	</div>

	<div class="col-sm-8 col-sm-offset-2" id="conteudo">

		<div class="col-sm-8">
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
			
			

		</table>
		
			
		
		</div>

	</div>
</div>