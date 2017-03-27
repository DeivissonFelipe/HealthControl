<?php

class MedicamentosController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('Flash');

	//-------------------------------------------------------------------------------------------------------------------------------->>

	public function index(){
		$medicamentos = $this->Medicamento->find('all', array('conditions' => array('Medicamento.usuario_id' => $this->Session->read('User')[0]['Usuario']['id'])));
		$this->set('medicamentos', $medicamentos);
	}


	 
	public function cadastrar(){
		$this->loadModel('Categoria');
		if(empty($this->request->data)){
			$categorias = $this->Categoria->find('list', array('fields' => array('id', 'nome')));
			$this->set('categorias', $categorias);
		}
		else{
			if($this->Medicamento->save($this->request->data)){
				$this->Flash->set('Medicamento cadastrado com sucesso!');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	public function editar($id = null){
		$this->loadModel('Categoria');
		if(empty($this->request->data)){
			//carregar campos para edição
			$categorias = $this->Categoria->find('list', array('fields' => array('id', 'nome')));
			$this->set('categorias', $categorias);
			$this->request->data= $this->Medicamento->findById($id);
		}
		else{
			//Salvar os dados
			if($this->Medicamento->save($this->request->data)){
				$this->Flash->set('Medicamento atualizado com sucesso!');
				$this->redirect(array("action" => "index"));
			}
		}

	}

	public function excluir($id = null){
		
		if(!$id){
			throw new NotFoundException("Medicamento Inválido");
		}

		$this->Medicamento->id = $id;
        if (!$this->Medicamento->exists()) {
            throw new NotFoundException(__('Medicamento não encontrado.'));
        }

		if($this->Medicamento->delete($id)){
		 	$this->Flash->set("Medicamento excluído com sucesso!");
		 	$this->redirect(array('action' => 'index'));
		}
		$this->Flash->set('Erro: não foi possível excluir o registro.');
    	$this->redirect(array('action' => 'index'));
				
	}

	public function indexM($id = null){
		$medicamento = $this->Medicamento->findById($id);
		$this->set('medicamento', $medicamento);
	}

}