<?php 

class Cdiario extends AppModel {
	public $belongsTo = array('Medicamento', 'Usuario');
}