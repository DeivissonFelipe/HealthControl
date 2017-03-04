 <style>
    h4, p{font-family: "Karma", sans-serif}
</style>

 <div class="container col-sm-6 col-sm-offset-3">		
		
    <div class="page-header">
	   <h3 align="center">Registro de Medicamento</h3>
    </div>  
    <br>
    
    <div class="row">
        <div class="container col-sm-4">
            <h4>Id: </h4>
        </div>
        <div class="container col-sm-6">
            <h4><?php echo $medicamento['Medicamento']['id']; ?></h4>
        </div>
    </div><br>

    <div class="row">
        <div class="container col-sm-4">
            <h4>Nome: </h4>
        </div>
        <div class="container col-sm-6">
            <h4><?php echo $medicamento['Medicamento']['nome']; ?></h4>
        </div>
    </div><br>
     
    <div class="row">
        <div class="container col-sm-4">
            <h4>Quantidade em Estoque: </h4>
        </div>
        <div class="container col-sm-6">
            <h4><?php echo $medicamento['Medicamento']['qtd']; ?></h4>
        </div>
    </div> <br>
    
    <div class="row">
        <div class="container col-sm-4">
            <h4>Via: </h4>
        </div>
        <div class="container col-sm-6">
            <h4><?php echo $medicamento['Medicamento']['via']; ?></h4>
        </div>
    </div> <br> 
    
    <div class="row">
        <div class="container col-sm-4">
            <h4>Descrição: </h4>
        </div>
        <div class="container col-sm-6">
            <h4><?php echo $medicamento['Medicamento']['descricao']; ?></h4>
        </div>
    </div> <br> 

    <div class="row">
        <div class="container col-sm-4">
            <h4>Categoria: </h4>
        </div>
        <div class="container col-sm-6">
            <h4><?php echo $medicamento['Categoria']['nome']; ?></h4>
        </div>
    </div> <br> 

    <div class="row">
        <div class="container col-sm-4">
            <h4>Indicações: </h4>
        </div>
        <div class="container col-sm-6">
            <h4><textarea class="form-control" rows="5" cols="5">
                <?php echo $medicamento['Medicamento']['indicacoes']; ?>
            </textarea></h4>
        </div>
    </div> <br> 


    <div class="row">
        <div class="container col-sm-4">
            <h4>Contra Indicações: </h4>
        </div>
        <div class="container col-sm-6">
            <h4><textarea class="form-control" rows="5" cols="5">
                <?php echo $medicamento['Medicamento']['contra_indicacoes']; ?>
            </textarea></h4>
        </div>
    </div> <br> 

</div>


    