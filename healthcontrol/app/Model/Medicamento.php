<?php 

class Medicamento extends AppModel {
	public $belongsTo = array('Categoria');	
	public $hasMany = array('Receita', 'Cdiario');
}