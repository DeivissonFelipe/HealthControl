<?php

class GlicosesController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('Flash');

	public function index(){
		$glicoses = $this->Glicose->find('all', array('conditions' => array('Glicose.usuario_id' => $this->Session->read('User')[0]['Usuario']['id']),'order'=> "data DESC"));
		$this->set('glicoses', $glicoses);
	}

	public function cadastrar(){
		
		if($this->Glicose->save($this->request->data)){
			$this->Flash->set('Taxa de glicose cadastrada com sucesso!');
			$this->redirect(array('action' => 'index'));
		}
		
	} 

	public function editar($id = null){
		if(empty($this->request->data)){
			$this->request->data= $this->Glicose->findById($id);
		}
		else{
			if($this->Glicose->save($this->request->data)){
				$this->Flash->set('Taxa de glicose atualizada com sucesso!');
				$this->redirect(array('action' => 'index'));
			}
		}

	}

	public function excluir($id = null){
		if(!$id){
			throw new NotFoundException("Taxa de Glicose Inválida");
		}

		$this->Glicose->id = $id;
        if (!$this->Glicose->exists()) {
            throw new NotFoundException(__('Taxa de Glicose não encontrada.'));
        }

		if($this->Glicose->delete($id)){
		 	$this->Flash->set("Taxa de Glicose excluída com sucesso!");
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
			$mes['MONTH(data)'] = $this->request->data['Glicose']['mes'];
			$ano['YEAR(data)'] =  $this->request->data['Glicose']['ano'];


			$glicoses = $this->Glicose->find('all', array('conditions' => array(
											$mes,
											$ano,
											'Glicose.usuario_id' => $this->Session->read('User')[0]['Usuario']['id']),
											'order'=> "data ASC"
			));

			
			$this->set('glicoses', $glicoses);
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