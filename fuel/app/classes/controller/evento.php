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

class Controller_Evento extends Controller_Rest
{


	   
	public function action_recebeEvento(){
		
		if(isset($_POST) && count($_POST) > 0){
			$Evento = Model_Evento::forge();
            $Evento->idEvento = $_POST['idEvento'];
			$Evento->descricao = $_POST['descricao'];
            $Evento->dtinicial = $_POST['dtinicial'];
            $Evento->dtfinal = $_POST['dtfinal'];
            $Evento->idtipoEvento = $_POST['idtipoEvento'];
			
			$app_db = Model_tipoEvento::find('all');
			
            
	}
             }

	public function get_retornaEvento()
    {
    	$retorno = Model_Evento::find('all');
		return $this->response($retorno);
    }
}