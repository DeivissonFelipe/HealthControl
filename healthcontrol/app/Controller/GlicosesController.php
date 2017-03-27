<?php

class GlicosesController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('Flash');

	public function index(){
		$glicoses = $this->Glicose->find('all', array('conditions' => array('Glicose.usuario_id' => $this->Session->read('User')[0]['Usuario']['id'])));
		$this->set('glicoses', $glicoses);
	}

	public function add(){} //implementar

	public function editar(){} //implementar

	public function excluir(){} //implementar
}