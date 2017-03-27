<?php echo $this->Html->script('funcoes'); ?>

<div class="container col-sm-8 col-sm-offset-2">		
	<div class="page-header">
		<h2 align="center">Cálculo do IMC</h2>
	</div>	
	<br><br>
	<div class="col-sm-8 col-sm-offset-2">
		<form class="form-horizontal" role="form" name="imc" id="formIMC" action="#">
				
				<div class="form-group">
				<label  class="control-label col-sm-4" for="peso">Digite o Seu  Peso:</label>
					<div class="col-sm-2">
					  <input class="form-control" type="text" name="peso" id="peso" />
					</div>  
				</div>
				  
				<div class="form-group">
					<label class="control-label col-sm-4" for="altura">Digite sua altura:</label>
					<div class="col-sm-2">
						<input class="form-control" type="text" name="altura" id="altura"/>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="Result">Resultado:</label>
					<div class="col-sm-2">
						<input class="form-control" type="text" name="resultado" id="res" disabled/>
					</div>
				</div>
				
				<label class="control-label col-sm-4" for="Result">Faixa de Peso ideal:</label>
				<div class="form-group">
					<!-- <div class="row"> -->
						<div class="col-sm-2">
							<input class="form-control" type="text" name="pesoIdeal1" id="pesoIdeal1" disabled/>
						</div>
						<div class="col-sm-1">
							<p style="text-align: center; font-weight: bold;">~</p>
						</div>
						<div class="col-sm-2">
							<input class="form-control" type="text" name="pesoIdeal2" id="pesoIdeal2" disabled/>
						</div>
					<!-- </div> -->
				</div>

				<div class="col-sm-6 col-sm-offset-3">
					<div class="col-sm-6">
						<button class="btn btn-lg btn-block btn-secondary" type="button" onclick="validar()">Calcular</button>  
					</div>
					<div class="col-sm-6">
						<button class="btn btn-lg btn-block btn-default" type="reset">Limpar</button>  
					</div>
				</div>
		</form>
		<br><br><br><br>
	</div>
</div>
