<?php
class Model_Local extends Orm\Model{

	protected static $_table_name = 'local';

	protected static $_properties = array('idLocal', 'Nome', 'Descricao', 'Cidade', 'Latitude', 'Longitude', 'Thumbs');
	
    protected static $_primary_key = array('idLocal');
    
	protected static $_has_many = array(
    'criaLocais' => array(
        'key_from' => 'idLocal',
        'model_to' => 'Model_Usuario_Cria_Local',
        'key_to' => 'idLocal',
        'cascade_save' => true,
        'cascade_delete' => false,
    ),
        'hasAvaliacoes' => array(
        'key_from' => 'idLocal',
        'model_to' => 'Model_Local_Has_Avaliacao',
        'key_to' => 'idLocal',
        'cascade_save' => true,
        'cascade_delete' => false,
    ),
          'fotos' => array(
        'key_from' => 'idLocal',
        'model_to' => 'Model_Album_Local',
        'key_to' => 'local_idLocais',
        'cascade_save' => true,
        'cascade_delete' => false,
    ),
        'eventos' => array(
        'key_from' => 'idLocal',
        'model_to' => 'Model_Local_Has_Evento',
        'key_to' => 'idLocais',
        'cascade_save' => true,
        'cascade_delete' => false,
    )
);
}

?>