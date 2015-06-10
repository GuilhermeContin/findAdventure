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
    
class Controller_Avaliacao extends Controller_Rest
{


	public function action_recebeAvaliacao(){
		
		if(isset($_POST) && count($_POST) > 0){
			$avaliacao = Model_Avaliacao::forge();
            $avaliacao->idAvaliacao = $_POST['idAvaliacao'];
			$avaliacao->reservaHidrica = $_POST['reservaHidrica'];
			$avaliacao->reservaFlorestal = $_POST['reservaFlorestal'];
			$avaliacao->ambiente  = $_POST['ambiente'];
			$avaliacao->poluicaoAr = $_POST['poluicaoAr'];
            $avaliacao->poluicaoLocal = $_POST['poluicaoLocal'];
			
			$app_db = Model_Avaliacao::find('all');
			
            
	}
             }

	public function get_retornaAvaliacao()
    {
    	$retorno = Model_Avaliacao::find('all');
		return $this->response($retorno);
    }
}