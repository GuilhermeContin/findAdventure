<?php
class Model_TipoEvento extends Orm\Model{

	protected static $_table_name = 'tipoEvento';

	protected static $_properties = array('idtipoEvento', 'Descricao');
	
    protected static $_primary_key = array('idtipoEvento');
	
    protected static $_has_many = array(
    'tipoEvento' => array(
        'key_from' => 'idtipoEvento',
        'model_to' => 'Model_Evento',
        'key_to' => 'idEvento',
        'cascade_save' => true,
        'cascade_delete' => false,
    )
);
}

?>