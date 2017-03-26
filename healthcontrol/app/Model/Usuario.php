<?php 

class Usuario extends AppModel {
	
public $hasMany = array('Cdiario', 'Receita');

public $validate = array(
		'login' => array(

		   	'alphaNumeric' => array(
	                'rule'     => 'alphaNumeric',
	                'message'  => 'Somente letras e números'
	        ),

	        'unique' => array(
				'rule' => 'isUnique',
				'message' => 'Login já cadastrado em nosso banco de dados'
			),
  		),

		'senha' => array(
	        'minLength' => array(
		        'rule' => array('minLength', 8),
		        'message' => 'Senha deve conter no mínimo 8 caracteres'
	        ),

	        'validacaoSenha' => array(
	   			'rule' => array('validacaoSenha'),
	   			'message' => 'Senhas não combinam'
	   		)
	        
	    ),

	   'csenha' => array(
	   		'minLength' => array(
		        'rule' => array('minLength', 8),
		        'message' => 'Senha deve conter no mínimo 8 caracteres'
	        ),

	   		'validacaoSenha' => array(
	   			'rule' => array('validacaoSenha'),
	   			'message' => 'Senhas não combinam'
	   		)

	   	)

	);


	public function validacaoSenha($data){
         
        $senha = $this->data['Usuario']['senha'];
        $confirm_senha = $this->data['Usuario']['csenha'];
              
        if($senha===$confirm_senha){
             
            return true;
             
        }else{
             
            return false;
             
        }
         
    }

	
}

 