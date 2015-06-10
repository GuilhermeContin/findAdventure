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
class Controller_WebService  extends Controller_Rest
{

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	
		
	public function action_recebeUsuario(){
		
		if(isset($_POST) && count($_POST) > 0){
			$usuario = Model_Usuario::forge();
            $usuario->idUsuario = $_POST['idUsuario'];
			$usuario->login = $_POST['login'];
			$usuario->senha = $_POST['senha'];
			$usuario->nome  = $_POST['nome'];
			$usuario->email = $_POST['email'];
			
			$app_db = Model_Usuario::find('all');
			
            
	}
             }

	public function get_retornaUsuario()
    {
    	$retorno = Model_Usuario::find('all');
		return $this->response($retorno);
    }
}
