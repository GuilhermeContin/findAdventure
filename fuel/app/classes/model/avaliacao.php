<?php
class Model_Avaliacao extends Orm\Model{

	protected static $_table_name = 'avaliacao';
    protected static $_primary_key = array('idAvaliacao');
	protected static $_properties = array('idAvaliacao', 'reservaHidrica', 'reservaFlorestal', 'ambiente', 'poluicaoAr', 'poluicaoLocal');
    
    
        protected static $_has_many = array(
    'avaliacao' => array(
        'key_from' => 'idAvaliacao',
        'model_to' => 'Model_Local_Has_Avaliacao',
        'key_to' => 'idAvaliacao',
        'cascade_save' => true,
        'cascade_delete' => false,
    )
);
	
	
}

?>