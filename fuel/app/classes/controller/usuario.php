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

class Controller_Usuario extends Controller_Rest
{


	
	public function action_recebeUsuario(){
		$file = fopen("log_user.txt", "a");
        fwrite($file, "Inicio");
		if(isset($_POST) && count($_POST) > 0){
            fwrite($file, "post");
            fwrite($file, var_export($_POST, true) );
			$usuario = Model_Usuario::forge();
			$usuario->login = $_POST['login'];
			$usuario->senha = $_POST['senha'];
			$usuario->nome  = $_POST['nome'];
			$usuario->email = $_POST['email'];
            fwrite($file, var_export($usuario, true) );
			
            if( $usuario->save(false) ){
                
                fwrite($file, "salvou");
            } else{
                
                fwrite($file, "não salvou");
            }
	   }
        fwrite($file, "saiu if");
        fclose($file);
    }

	public function get_retornaUsuario()
    {
    	$retorno = Model_Usuario::find('all');
		return $this->response($retorno);
    }
}