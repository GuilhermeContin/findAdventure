<?php

class Model_Usuario extends Orm\Model{

	protected static $_table_name = 'usuario';

	protected static $_properties = array('idUsuario', 'login', 'senha', 'nome', 'email');
    
    protected static $_primary_key = array('idUsuario');
	
	/*protected static $_has_many = array(
    'criaLocais' => array(
        'key_from' => 'idUsuario',
        'model_to' => 'Model_Usuario_Cria_Local',
        'key_to' => 'idUsuario',
        'cascade_save' => true,
        'cascade_delete' => false,
    ),
        'hasAvaliacoes' => array(
        'key_from' => 'idUsuario',
        'model_to' => 'Model_Local_Has_Avaliacao',
        'key_to' => 'idUsuario',
        'cascade_save' => true,
        'cascade_delete' => false,
    )
);*/
}

?>