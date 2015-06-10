<?php
class Model_Evento extends Orm\Model{

	protected static $_table_name = 'evento';

	protected static $_properties = array('idEvento', 'descricao', 'dtinicial', 'dtfinal', 'idTipoEvento');
	protected static $_primary_key = array('idEvento');
    protected static $_has_many = array(
    'hasEvento' => array(
        'key_from' => 'idEvento',
        'model_to' => 'Model_Local_Has_Evento',
        'key_to' => 'idEvento',
        'cascade_save' => true,
        'cascade_delete' => false,
    )
);
    protected static $_belongs_to = array(
    'tipoEvento' => array(
        'key_from' => 'idTipoEvento',
        'model_to' => 'Model_Local_Has_Evento',
        'key_to' => 'idTipoEvento',
        'cascade_save' => true,
        'cascade_delete' => false,
    )
);
	
}

?>