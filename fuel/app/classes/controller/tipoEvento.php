<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2014 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */

class Controller_TipoEvento extends Controller_Rest
{


	
	public function action_recebeTipoEvento(){
		
		if(isset($_POST) && count($_POST) > 0){
			$tipoEvento = Model_TipoEvento::forge();
            $tipoEvento->idtipoEvento = $_POST['idtipoEvento'];
			$tipoEvento->descricao = $_POST['descricao'];
			
			$app_db = Model_TipoEvento::find('all');
			
            
	}
             }

	public function get_retornaTipoEvento()
    {
    	$retorno = Model_TipoEvento::find('all');
		return $this->response($retorno);
    }
}