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

	public function grafico(){}
}