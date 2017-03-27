<?php

class PressuresController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('Flash');

	public function index(){
		$pressures = $this->Pressure->find('all', array('conditions' => array('Pressure.usuario_id' => $this->Session->read('User')[0]['Usuario']['id']),'order'=> "data DESC"));
		$this->set('pressures', $pressures);
	}

	public function cadastrar(){
		if($this->Pressure->save($this->request->data)){
			$this->Flash->set('Medições de Pressão cadastradas com sucesso!');
			$this->redirect(array('action' => 'index'));
		}
	}

	public function editar($id = null){
		if(empty($this->request->data)){
			$this->request->data= $this->Pressure->findById($id);
		}
		else{
			if($this->Pressure->save($this->request->data)){
				$this->Flash->set('Medições de Pressão atualizadas com sucesso!');
				$this->redirect(array('action' => 'index'));
			}
		}
	} 

	public function excluir($id = null){
		if(!$id){
			throw new NotFoundException("Registro Inválido");
		}

		$this->Pressure->id = $id;
        if (!$this->Pressure->exists()) {
            throw new NotFoundException(__('Registro não encontrado.'));
        }

		if($this->Pressure->delete($id)){
		 	$this->Flash->set("Registro excluído com sucesso!");
		 	$this->redirect(array('action' => 'index'));
		}
		$this->Flash->set('Erro: não foi possível excluir o registro.');
    	$this->redirect(array('action' => 'index'));
	} 

	public function grafico(){
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
			$mes['MONTH(data)'] = $this->request->data['Pressure']['mes'];
			$ano['YEAR(data)'] =  $this->request->data['Pressure']['ano'];


			$pressures = $this->Pressure->find('all', array('conditions' => array(
											$mes,
											$ano,
											'Pressure.usuario_id' => $this->Session->read('User')[0]['Usuario']['id']),
											'order'=> "data ASC"
			));

			$this->set('pressures', $pressures);
			//--------------------------------------------------------------------------------------->>
		}
	}


	public function preencheDados(){
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

		$this->set('meses', $meses);	
	}

}