<?php


class ReceitasController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('Flash');


	public function index(){
		$receitas = $this->Receita->find('all');
		$this->set('receitas', $receitas);
	}

	public function cadastrar(){
		$this->loadModel('Medicamento');
		if(empty($this->request->data)){
			$turnos = array(1 =>'manha', 2=>'tarde', 3 =>'noite');
			$medicamentos = $this->Medicamento->find('list', array('fields' => array('id', 'nome')));
			$this->set('turnos', $turnos);
			$this->set('medicamentos', $medicamentos);
		}
		else{
			if($this->Receita->save($this->request->data)){
				$this->Flash->set('Receita cadastrada com sucesso!');
				$this->redirect(array('action' => 'index'));
			}
		}

	}

	public function editar(){} //implementar

	public function excluir(){} //implementar

	public function controleDiario(){

		//procuro por logs na tabela de cDiario que a data eh hj e o usuario eh o atual
		//procuro por todas as receitas ativas "do usuario"

		//separa as pesquisas em duas variaveis, $pendentes(Receitas) e $cadastradas(cDiario)
		//for varrando os cDiarios para ver se a receite esta pendente ou cadastrada


		// $time = date('d-m-Y'); //pegando hora do sistema
		// $this->set('time', $time);

	}

	public function registraDiario(){}
	public function atualizaSintomas(){}

	public function relatorio(){}

}