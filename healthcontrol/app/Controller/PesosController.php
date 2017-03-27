<?php

class PesosController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('Flash');

	public function imc(){} //done

	public function index(){
		$pesos = $this->Peso->find('all', array('conditions' => array('Peso.usuario_id' => $this->Session->read('User')[0]['Usuario']['id']),'order'=> "data DESC"));
		$this->set('pesos', $pesos);
	} 

	public function cadastrar(){
		if($this->Peso->save($this->request->data)){
			$this->Flash->set('Peso cadastrado com sucesso!');
			$this->redirect(array('action' => 'index'));
		}
	} 

	public function editar($id = null){

		if(empty($this->request->data)){
			$this->request->data= $this->Peso->findById($id);
		}
		else{
			if($this->Peso->save($this->request->data)){
				$this->Flash->set('Peso atualizado com sucesso!');
				$this->redirect(array('action' => 'index'));
			}
		}
	} 

	public function excluir($id = null){

		if(!$id){
			throw new NotFoundException("Peso Inválido");
		}

		$this->Peso->id = $id;
        if (!$this->Peso->exists()) {
            throw new NotFoundException(__('Peso não encontrado.'));
        }

		if($this->Peso->delete($id)){
		 	$this->Flash->set("Peso excluído com sucesso!");
		 	$this->redirect(array('action' => 'index'));
		}
		$this->Flash->set('Erro: não foi possível excluir o registro.');
    	$this->redirect(array('action' => 'index'));

	} 

	public function grafico(){}
}