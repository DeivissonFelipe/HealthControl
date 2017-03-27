<?php 

class Medicamento extends AppModel {
	public $belongsTo = array('Categoria', 'Usuario');	
	public $hasMany = array('Receita', 'Cdiario');
}