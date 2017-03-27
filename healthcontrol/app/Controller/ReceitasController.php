<?php


class ReceitasController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('Flash');


	public function index(){
		// $receitas = $this->Receita->find('all');
		$receitas = $this->Receita->find('all', array('conditions' => array('Receita.usuario_id' => $this->Session->read('User')[0]['Usuario']['id'])));
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
		
		$this->loadModel('Cdiario');
		$this->loadModel('Receita');

		$registros = $this->Cdiario->find('all', 
			array('conditions' => array('Cdiario.data' => date('Y-m-d'), 
										'Cdiario.usuario_id' => $this->Session->read('User')[0]['Usuario']['id'])));
		
		$receitas = $this->Receita->find('all', 
			array('conditions' => array('Receita.usuario_id' => $this->Session->read('User')[0]['Usuario']['id'])));
		

		$registradas = array();
		$pendentes = array();

		foreach ($receitas as $r) {
			$estaRegistrado = false;
			foreach ($registros as $reg) {
				if($r['Receita']['medicamento_id'] == $reg['Cdiario']['medicamento_id']){
					$estaRegistrado = true;
					array_push($registradas, $reg);
				}
			}
			if($estaRegistrado == false){
				array_push($pendentes, $r);
			}
		}
		$this->set(array('registradas' => $registradas, 'pendentes' => $pendentes));
	}

	public function registraDiario(){
		$this->loadModel('Cdiario');
		$registros = $this->request->data['var'];
		
		foreach ($registros as $r) {
			//usuario_id ------------------------------------->>
			$receita = $this->Receita->findById($r);
			$usuario_id = $receita['Receita']['usuario_id'];
			//------------------------------------------------>>
			
			//medicamento_id ------------------------------------->>
			$medicamento_id = $receita['Receita']['medicamento_id'];
			//------------------------------------------------>>

			//turno ------------------------------------------>>
			$turno = $receita['Receita']['turno'];
			//------------------------------------------------>>

			//data ------------------------------------------->>
			$data = date('Y-m-d');
			//------------------------------------------------>>

			$this->request->data = 
				array('Cdiario' =>
					array('usuario_id' => $usuario_id,
						  'medicamento_id' => $medicamento_id,
						  'turno' => $turno,
						  'data' => $data,
			));	
			
			$this->Cdiario->save($this->request->data);
		}
			$this->redirect(array("controller" => "receitas", "action" => "controleDiario"));
	}

	public function atualizaSintomas($id = null){
		$this->loadModel('Cdiario');
		if(empty($this->request->data)){
			$this->request->data = $this->Cdiario->findById($id);
		}
		else{	
			if($this->Cdiario->save($this->request->data)){
				$this->Flash->set('Sintoma atualizado com sucesso!');
				$this->redirect(array("controller" => "receitas", "action" => "controleDiario"));
			}
		}
	}

	public function relatorio(){
		$this->loadModel('Cdiario');
		$this->loadModel('Medicamento');
		if(empty($this->request->data)){
			//Preencher os dados de seleção
			//--------------------------------------------------------------------------------------->>
			$this->preencheDados();
			//--------------------------------------------------------------------------------------->>
		}
		else{
			//Preencher os dados de seleção
			//--------------------------------------------------------------------------------------->>
			$this->preencheDados();
			//--------------------------------------------------------------------------------------->>

			//Seleção de Registros que estão relacionados com os dados selecionados
			//--------------------------------------------------------------------------------------->>
			$mes['MONTH(data)'] = $this->request->data['Receita']['mes'];
			$ano['YEAR(data)'] =  $this->request->data['Receita']['ano'];
			$medicamento = $this->request->data['Receita']['medicamento_id'];
			$registros = $this->Cdiario->find('all', array('conditions' => array(
											$mes,
											$ano,
											$medicamento,
											'Cdiario.usuario_id' => $this->Session->read('User')[0]['Usuario']['id'])));

			
			$this->set('registros', $registros);
			//--------------------------------------------------------------------------------------->>
		}
	}


	public function preencheDados(){

		$medicamentos = $this->Medicamento->find('list', 
			array(
				'fields' => array('id', 'nome'),
				'conditions' => array('Medicamento.usuario_id' => $this->Session->read('User')[0]['Usuario']['id'])
			)
		);

		$meses = array(
			'1' => 'Janeiro',
			'2' => 'Fevereiro',
			'3' => 'Março',	
			'4' => 'Abril',
			'5' => 'Maio',
			'6' => 'Junho',
			'7' => 'Julho',
			'8' => 'Agosto',
			'9' => 'Setembro',
			'10' => 'Outubro',
			'11' =>	'Novembro',
			'12' => 'Dezembro'
		);

		$this->set(array('medicamentos' => $medicamentos, 'meses' => $meses));	
	}

}