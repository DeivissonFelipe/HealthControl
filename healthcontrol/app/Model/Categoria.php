<?php 

class Categoria extends AppModel {
	public $hasMany = array('Medicamento');
}